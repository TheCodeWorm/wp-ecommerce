<?php
/**
 * A class definition responsible for processing auto feed update
 *
 * @link       https://webappick.com/
 * @since      1.0.0
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/includes
 * @author     Ohidul Islam <wahid@webappick.com>
 */

class WOO_FEED_AUTO_UPDATE{

    /**
     * @var $feedNames array contains all the available feed name
     */
    private $feedNames;

    /**
     * @var $executionTime int Hold execution time to update feed at a time
     */
    private $executionTime;

    public function __construct(){
        $this->feedNames=$this->get_feed_names();
        $this->executionTime=$this->getExecutionTime();
        $this->executeUpdate();
        $this->executeUpdate();
    }


    public function get_feed_names()
    {
        global $wpdb;
        $var = "wf_feed_";
        $query = $wpdb->prepare("SELECT * FROM $wpdb->options WHERE option_name LIKE %s;", $var . "%");
        $result = $wpdb->get_results($query, 'ARRAY_A');
        $feeds=array();
        $i=1;
        foreach ($result as $key => $value) {
            $feedInfo = unserialize(get_option($value['option_name']));
            $feeds[$i]['last_updated']=$feedInfo['last_updated'];
            $feeds[$i]['feed_name']=$value['option_name'];
        $i++;
        }

        return  $feeds;
    }

    public function getExecutionTime()
    {
        return ini_get("max_execution_time");
    }

    public function getFeedInfo($feedName)
    {
        $feedInfo=get_option("wf_cron_info_".$feedName);
        if($feedInfo){
            return $feedInfo;
        }else{
            $totalProducts=$this->getTotalProducts($feedName);
            $batches=ceil($totalProducts/200);
             $feedInfo=array(
                "totalProducts"=>$totalProducts,
                "batches"=>$batches,
            );
            update_option("wf_cron_info_".$feedName,$feedInfo);
            return $feedInfo;
        }
    }

    public function getTotalProducts($feedName){
        $feedName=sanitize_text_field(str_replace("wf_feed_","wf_config",$feedName));
        $feedInfo=get_option($feedName);

        if(!$feedInfo){
            $getFeedConfig=unserialize(get_option($feedName));
            $feedInfo=$getFeedConfig['feedrules'];
        }
        $arg = array(
            'post_type' => array('product','product_variation'),
            'post_status' => 'publish',
            'ignore_sticky_posts' => 1,
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'desc',
            'fields' => 'ids',
        );

        if (get_option('woocommerce_product_feed_pro_activated') && get_option('woocommerce_product_feed_pro_activated') == "Activated") {

            # Argument for Product search by ID
            if (isset($feedInfo['fattribute']) && is_array($feedInfo['fattribute'])) {
                if(count($feedInfo['fattribute'])){
                    $condition=$feedInfo['condition'];
                    $compare=$feedInfo['filterCompare'];
                    $ids_in=array();
                    $ids_not_in=array();
                    foreach($feedInfo['fattribute'] as $key=>$rule){
                        if($rule=='id' && in_array($condition[$key],array("==","contain"))){
                            unset($feedInfo['fattribute'][$key]);
                            unset($feedInfo['condition'][$key]);
                            unset($feedInfo['filterCompare'][$key]);
                            if (strpos($compare[$key],',') !== false) {
                                foreach(explode(",",$compare[$key]) as $key=>$id){
                                    array_push($ids_in,$id);
                                }
                            }else{
                                array_push($ids_in,$compare[$key]);
                            }
                        }elseif($rule=='id' && in_array($condition[$key],array("!=","nContains"))){
                            unset($feedInfo['fattribute'][$key]);
                            unset($feedInfo['condition'][$key]);
                            unset($feedInfo['filterCompare'][$key]);
                            if (strpos($compare[$key],',') !== false) {
                                foreach(explode(",",$compare[$key]) as $key=>$id){
                                    array_push($ids_not_in,$id);
                                }
                            }else{
                                array_push($ids_not_in,$compare[$key]);
                            }
                        }
                    }

                    if(count($ids_in)){
                        $arg['post__in']=$ids_in;
                    }

                    if(count($ids_not_in)){
                        $arg['post__not_in']=$ids_not_in;
                    }
                }
            }

            if (isset($feedInfo['categories']) && is_array($feedInfo['categories']) && !empty($feedInfo['categories'][0])) {
                $i = 0;
                $arg['tax_query']['relation'] = "OR";
                foreach ($feedInfo['categories'] as $key => $value) {
                    if (!empty($value)) {
                        $arg['tax_query'][$i]["taxonomy"] = "product_cat";
                        $arg['tax_query'][$i]["field"] = "slug";
                        $arg['tax_query'][$i]["terms"] = $value;
                        $i++;
                    }
                }
            }
        }

        # Query Database for products
        $loop = new WP_Query($arg);

        return $loop->post_count;
    }

    public function updateBatchInfo($feedName,$Info,$lastBatch,$status)
    {
        $feedInfo=get_option("wf_cron_info_".$feedName);
        if($feedInfo){
           $feedInfo['lastBatch']=$lastBatch;
           $feedInfo['completed']=$status;
            update_option("wf_cron_info_".$feedName,$feedInfo);
        }else{
            $nInfo=array(
                "totalProducts"=>$Info['totalProducts'],
                "batches"=>$Info['batches'],
                "lastBatch"=>$lastBatch,
                "completed"=>$status,
            );
            update_option("wf_cron_info_".$feedName,$nInfo);
        }

    }

    public function executeUpdate()
    {
       if(!empty($this->feedNames)){
           foreach($this->feedNames as $name){
               $info=$this->getFeedInfo($name['feed_name']);
               if(isset($info['update'])){
                   
               }else if(!empty($info['batches']) && $info['batches']>0){
                   $offset=0;
                   $limit=200;
                   for ($i=1;$i<$info['batches'];$i++){
                       $this->woo_feed_make_batch_feed($name['feed_name'],200,$offset);
                       $offset=$offset+$limit;
                   }
                   $this->woo_feed_save_feed_file($name['feed_name']);
               }
           }
       }
    }

    public function woo_feed_generate_feed_data($info){
        if (count($info) && isset($info['provider'])) {
            # GEt Post data
            if ($info['provider'] == 'google') {
                $merchant = "Woo_Feed_Google";
            } elseif ($info['provider'] == 'facebook') {
                $merchant = "Woo_Feed_Facebook";
            }elseif (strpos($info['provider'],'amazon') !==FALSE) {
                $merchant = "Woo_Feed_Amazon";
            }elseif ($info['provider'] == 'custom2') {
                $merchant = "Woo_Feed_Custom2";
            } else {
                $merchant = "Woo_Feed_Custom";
            }

            $feedService = sanitize_text_field($info['provider']);
            $fileName = str_replace(" ", "", sanitize_text_field($info['filename']));
            $type = sanitize_text_field($info['feedType']);

            $feedRules = $info;

            # Get Feed info
            $products = new Woo_Generate_Feed($merchant, $feedRules);
            $feed = $products->getProducts();
            if(!empty($feed['body'])){
                $feedHeader="wf_cron_feed_header_info_".$fileName;
                $feedBody="wf_cron_feed_body_info_".$fileName;
                $feedFooter="wf_cron_feed_footer_info_".$fileName;
                $prevFeed= woo_feed_get_batch_feed_info($feedService,$type,$feedBody);//get_option($feedBody);
                if($prevFeed){
                    if($type=='csv'){
                        $newFeed=array_merge($prevFeed, $feed['body']);
                    }else{
                        $newFeed=$prevFeed.$feed['body'];
                    }
                    //update_option($feedBody,$newFeed);
                    woo_feed_save_batch_feed_info($feedService,$type,$newFeed,$feedBody,$info);
                }else{
                    //update_option($feedBody,$feed['body']);
                    woo_feed_save_batch_feed_info($feedService,$type,$feed['body'],$feedBody,$info);
                }
                //update_option($feedHeader,$feed['header']);
                woo_feed_save_batch_feed_info($feedService,$type,$feed['header'],$feedHeader,$info);
                //update_option($feedFooter,$feed['footer']);
                woo_feed_save_batch_feed_info($feedService,$type,$feed['footer'],$feedFooter,$info);

                return true;
            }else{
                return false;
            }
        }
        return false;
    }

    
    public function woo_feed_make_batch_feed($feedName,$limit,$offset){
        $limit=sanitize_text_field($limit);
        $offset=sanitize_text_field($offset);
        $feedName=sanitize_text_field(str_replace("wf_feed_","wf_config",$feedName));
        $feedInfo=get_option($feedName);

        if(!$feedInfo){
            $getFeedConfig=unserialize(get_option($feedName));
            $feedInfo=$getFeedConfig['feedrules'];
        }

        $feedInfo['Limit']=$limit;
        $feedInfo['Offset']=$offset;
        return $this->woo_feed_generate_feed_data($feedInfo);
    }


    public function woo_feed_save_feed_file($feedName){
        
        $feed=str_replace("wf_feed_", "",$feedName);
        $info=get_option($feed);
        if(!$info){
            $getInfo=unserialize(get_option($feedName));
            $info=$getInfo['feedrules'];
        }
        $feedService = $info['provider'];
        $fileName = str_replace(" ", "",$info['filename']);
        $type = $info['feedType'];

        //$feedHeader=get_option("wf_store_feed_header_info_".$fileName);
        $feedHeader=woo_feed_get_batch_feed_info($feedService,$type,"wf_cron_feed_header_info_".$fileName);
        //$feedBody=get_option("wf_store_feed_body_info_".$fileName);
        $feedBody=woo_feed_get_batch_feed_info($feedService,$type,"wf_cron_feed_body_info_".$fileName);
        //$feedFooter=get_option("wf_store_feed_footer_info_".$fileName);
        $feedFooter=woo_feed_get_batch_feed_info($feedService,$type,"wf_cron_feed_footer_info_".$fileName);

        // echo "<pre>"; print_r($feedHeader); print_r($feedBody);
        if($type=='csv'){
            $csvHead[0]=$feedHeader;
            $string=array_merge($csvHead,$feedBody);
        }else{
            $string=$feedHeader.$feedBody.$feedFooter;
        }
//    print_r($string);
//    $data=array($string);
//    wp_send_json_error($data);
//    wp_die();

        $upload_dir = wp_upload_dir();
        $base = $upload_dir['basedir'];
        $path = $base . "/woo-feed/" . $feedService . "/" . $type;
        $saveFile = false;
        # Check If any products founds
        if ($string) {
            # Save File

            $file = $path . "/" . $fileName . "." . $type;
            $save = new Woo_Feed_Savefile();
            if ($type == "csv") {
                $saveFile = $save->saveCSVFile($path, $file, $string, $info);
            } else {
                $saveFile = $save->saveFile($path, $file, $string);
            }
        }else{
            $data=array("success"=>false,"message"=>"No Product Found with your feed configuration. Please Update & Generate the feed again.");
        }


        # Save Info into database
        $url = $upload_dir['baseurl'] . "/woo-feed/" . $feedService . "/" . $type . "/" . $fileName . "." . $type;
        $feedInfo = array(
            'feedrules' => $info,
            'url' => $url,
            'last_updated' => date("Y-m-d H:i:s"),
        );

        if (!empty($name) && $name != "wf_feed_" . $fileName) {
            delete_option($name);
        }

        //delete_option("wf_config".$fileName);
        delete_option("wf_store_feed_header_info_".$fileName);
        delete_option("wf_store_feed_body_info_".$fileName);
        delete_option("wf_store_feed_footer_info_".$fileName);
        if ($type == "csv") {
            $type="json";
        }
//        unlink($path . "/" . "wf_cron_feed_header_info_".$fileName . "." . $type);
//        unlink($path . "/" . "wf_cron_feed_body_info_".$fileName . "." . $type);
//        unlink($path . "/" . "wf_cron_feed_footer_info_".$fileName . "." . $type);

        update_option('wf_feed_' . $fileName, serialize($feedInfo));
        
    }


}
