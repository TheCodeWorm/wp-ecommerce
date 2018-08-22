<?php

/**
 * Feed List View
 *
 * @link       https://webappick.com/
 * @since      1.0.0
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/admin/partial
 * @author     Ohidul Islam <wahid@webappick.com>
 */

$myListTable = new Woo_Feed_Manage_list();
$fileName="";
if(isset($_POST)&& isset($_POST['filename'])){
    $fileName = "wf_config".str_replace(" ", "", sanitize_text_field($_POST['filename']));
}
?>

<div class="wrap">
    <h2><?php echo _e('Manage Feed', 'woo-feed'); ?>
        <a href="<?php echo admin_url('admin.php?page=webappick-product-feed-for-woocommerce/admin/class-woo-feed-admin.php'); ?>"
           class="page-title-action"><?php echo _e('New Feed', 'woo-feed'); ?></a>
    </h2>
    <?php echo WPFFWMessage()->infoMessage1(); ?>

    
    <table class="table widefat fixed" id="feedprogresstable" style="display: none;">
        <thead>
        <tr>
            <th><b>Generating Product Feed</b></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <div class="feed-progress-container">
                    <div class="feed-progress-bar" >
                        <span class="feed-progress-bar-fill"></span>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div style="float: left;"><b style='color: darkblue;'><i class='dashicons dashicons-sos wpf_sos'></i></b>&nbsp;&nbsp;&nbsp;</div>
                <div class="feed-progress-container2" style="float: left;font-weight: bold;color: darkblue;">

                </div>
                <div class="feed-progress-container3" style="text-align:right;font-weight: bolder;color: #41f49d;font-family:'Arial Black';font-size: large;">

                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <br><br>

    <?php

    if (isset($_GET['link']) && !empty($_GET['link'])) {
        $message="<b style='color: #008779;'>Feed Generated Successfully. Feed URL: <a href=".$_GET['link']." target='_blank'>".$_GET['link']."</a></b>";
        if (isset($_GET['cat']) && $_GET['cat']=='no') {
            $message.="<br/><br/><b style='color: #f49242;'>Warning:</b><ul>Google Product category is not selected. Your AdWords CPC rate will be high. Add proper Google Product Category to each product & reduce CPC rate. <a target='_blank' href='https://webappick.helpscoutdocs.com/article/19-how-to-map-store-category-with-merchant-category'>Learn more...</a> </li></ul>";
        }
        echo "<div class='updated'><p>" . __($message, 'woo-feed') . "</p></div>";
    } elseif (isset($_GET['wpf_message']) && $_GET['wpf_message'] === 'error') {
        $dir=get_option("WPF_DIRECTORY_PERMISSION_CHECK");
        if($dir && !empty($dir)){
            echo "<div class='error'><p>" . __(get_option('wpf_message').$dir, 'woo-feed') . "</p></div>";
        }else{
            echo "<div class='error'><p>" . __(get_option('wpf_message'), 'woo-feed') . "</p></div>";
        }
    }
    $myListTable->prepare_items();
    ?>
    <table class=" widefat fixed">
        <thead>
        <tr>
            <th><b><?php echo _e('Auto Update Feed Interval'); ?></b></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <form action="" method="post">
                    <b><?php echo _e('Interval'); ?></b>&nbsp;&nbsp;&nbsp;
                    <select name="wf_schedule" id="wf_schedule">
                        <?php $interval = get_option('wf_schedule'); ?>
                        <option <?php echo  ($interval && $interval == "604800") ? "selected" : ""; ?> value="604800">1 Week</option>
                        <option <?php echo  ($interval && $interval == "86400") ? "selected" : ""; ?> value="86400">24 Hours</option>
                        <option <?php echo  ($interval && $interval == "43200") ? "selected" : ""; ?> value="43200">12 Hours</option>
                        <option <?php echo  ($interval && $interval == "21600") ? "selected" : ""; ?> value="21600">6 Hours</option>
                        <option <?php echo  ($interval && $interval == "3600") ? "selected" : ""; ?> value="3600">1 Hour</option>
                        <option <?php echo  ($interval && $interval == "900") ? "selected" : ""; ?> value="900">15 Minutes</option>
                        <option <?php echo  ($interval && $interval == "300") ? "selected" : ""; ?> value="300">5 Minutes</option>
                    </select>&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="button button-primary"><?php echo _e('Update Interval'); ?></button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
    <form id="contact-filter" method="post">
        <!-- For plugins, we also need to ensure that the form posts back to our current page -->
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
        <?php //$myListTable->search_box('search', 'search_id'); ?>
        <!-- Now we can render the completed list table -->
        <?php $myListTable->display() ?>
    </form>
</div>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('body').find(".single-feed-delete").click(function () {
            if (confirm('<?php _e('Are You Sure to Delete ?','woo-feed');?>')) {
                var url = jQuery(this).attr('val');
                window.location.href = url;
            }
        });

        jQuery('#doaction').click(function () {
            if (confirm('<?php _e('Are You Sure to Delete ?','woo-feed'); ?>'))
                return true;
            else
                return false;
        });

        jQuery('#doaction2').click(function () {
            if (confirm('<?php _e('Are You Sure to Delete ?','woo-feed'); ?>'))
                return true;
            else
                return false;
        });
    });
</script>

<script>

    (function( $ ) {
        'use strict';

        /**
         * All of the code for your admin-facing JavaScript source
         * should reside in this file.
         *
         * Note: It has been assumed you will write jQuery code here, so the
         * $ function reference has been prepared for usage within the scope
         * of this function.
         *
         * This enables you to define handlers, for when the DOM is ready:
         *
         * $(function() {
	 *
	 * });
         *
         * When the window is loaded:
         */

        $( window ).load(function() {

            $(".column-url").css("color", "#008779");
            $(".column-url").css("font-weight", "bold");

            var fileName="<?php echo isset($fileName)?$fileName:''; ?>";
            <?php $limit=get_option("woo_feed_per_batch");?>
            var limit=<?php echo ($limit)?$limit:200; ?>;
            if(fileName!=""){
                $("#feedprogresstable").show();
                
                generate_feed();
            }

            //==================Manage Feed==============================
            // Feed Regenerate
            $('.wpf_regenerate').on("click",function (e) {
                var elem = $('.wpf_regenerate');
                elem.prop('disabled', true);
                var fName = jQuery(this).attr('id');
                fileName=fName.replace("wf_feed_","wf_config");
                $(this).text('Generating...');

                //alert(fileName);
                if(fileName){
                    $("#feedprogresstable").show();
                    generate_feed();
                }

            });



            /*#######################################################
             #######-------------------------------------------#######
             #######    Ajax Feed Making Functions Start       #######
             #######-------------------------------------------#######
             #########################################################
             */

            // Variable responsible to hold progress bar width
            let width = 10;

            function showFeedProgress(color="#3DC264"){
                // Progress br init
                var bar = document.querySelector('.feed-progress-bar-fill');
                bar.style.width = width + '%';
                bar.style.background =color;
                var nWidth=Math.round(width);
                $(".feed-progress-container3").text(nWidth + '%');
            }


            function generate_feed() {
                $(".feed-progress-container2").text("Calculating total products.");

                $.ajax({
                    url : wpf_ajax_obj.wpf_ajax_url,
                    type : 'post',
                    data : {
                        _ajax_nonce: wpf_ajax_obj.nonce,
                        action: "get_product_information",
                        feed: fileName
                    },
                    success : function(response) {
                        console.log(response);
                        if(response.success) {
                            $(".feed-progress-container2").text("Delivering Feed Configuration.");
                            var products=parseInt(response.data.product);
                            if(products>2000){
                                processFeed(2000,0,0);
                                setTimeout(function(){
                                    $(".feed-progress-container2").text("Total 2000 products will be processed.");
                                }, 3000);
                            }else{
                                processFeed(products,0,0);
                            }

                           console.log("Counting Total Products:"+products);

                            $(".feed-progress-container2").text("Processing Products...");
                        }else{
                            $(".feed-progress-container2").text(response.data.message);
                            showFeedProgress('red');
                        }
                    }
                });
            }


            function processFeed(n,offset,batch) {
                if (typeof(offset)==='undefined') offset = 0;
                if (typeof(batch)==='undefined') batch = 0;

                var batches =Math.ceil(n/limit);

                var progressBatch=90/batches;

                var currentProducts=limit*batch;

                console.log("Batches:"+batches);
                console.log("progressBatch:"+progressBatch);
                console.log("currentProducts:"+currentProducts);
                console.log("Offset:"+currentProducts);
                console.log("Limit:"+currentProducts);

                //$(".feed-progress-container2").text(currentProducts+" out of "+n+" products processed.");
                var nWidth=Math.round(width);
                $(".feed-progress-container2").text("Processing products..."+nWidth+"%");

                if(batch<batches){
                    var a = performance.now();
                    console.log("Processing Batch "+batch+" of "+batches);
                    $.ajax({
                        url : wpf_ajax_obj.wpf_ajax_url,
                        type : 'post',
                        data : {
                            _ajax_nonce: wpf_ajax_obj.nonce,
                            action: "make_batch_feed",
                            limit:limit,
                            offset:offset,
                            feed: fileName
                        },
                        success : function(response) {
                           // console.log(response);
                            if(response.success) {
                                if(response.data.products=="yes"){
                                    offset=offset+limit;
                                    batch++;
                                    
                                    setTimeout(function(){
                                        processFeed(n,offset,batch);
                                    }, 5000);
                                    
                                    width=width+progressBatch;
                                    showFeedProgress();
                                }else if(n>offset){
                                    offset=offset+limit;
                                    batch++;
                                    
                                   setTimeout(function(){
                                        processFeed(n,offset,batch);
                                   }, 5000);
                                    
                                    width=width+progressBatch;
                                    showFeedProgress();
                                }else{
                                    $(".feed-progress-container2").text("Saving feed file.");
                                    save_feed_file();
                                }
                            }
                        },
                        error:function (response) {
                            if(response.status!=="200"){
                                offset=(offset-limit)+10;
                                batch++;
                                processFeed(n,offset,batch);

                                width=width+progressBatch;
                                showFeedProgress();
                            }
                            console.log(response);
                        }
                    });

                }else{
                    $(".feed-progress-container2").text("Saving feed file.");
                    save_feed_file();
                }
            }


            /**
             * Save feed file into WordPress upload directory
             * after successfully processing the feed
             */
            function save_feed_file(){
                $.ajax({
                    url : wpf_ajax_obj.wpf_ajax_url,
                    type : 'post',
                    data : {
                        _ajax_nonce: wpf_ajax_obj.nonce,
                        action: "save_feed_file",
                        feed:fileName
                    },
                    success : function(response) {
                       console.log(response);
                        if(response.success) {
                            width ='100';
                            showFeedProgress();
                            $(".feed-progress-container2").text(response.data.message);
                            //$("#feedprogresstable").hide();
                            $('.wf_regenerate').text('Regenerate');
                            $('.wf_regenerate').prop('disabled', false);
                            var url=response.data.url;
                            var cat=response.data.cat;
                           window.location.href = "<?php echo admin_url('admin.php?page=woo_feed_manage_feed&link='); ?>"+url+"&cat="+cat
                        }else{
                            showFeedProgress("red");
                            $(".feed-progress-container2").text(response.data.message);
                        }
                    },
                    error:function (response) {
                        console.log(response);
                        $(".feed-progress-container2").text("Failed to save feed file.");
                    }
                });
            }

            /*########################################################
             #######-------------------------------------------#######
             #######    Ajax Feed Making Functions End         #######
             #######-------------------------------------------#######
             #########################################################
             */




        });



        /**
         * ...and/or other possibilities.
         *
         * Ideally, it is not considered best practise to attach more than a
         * single DOM-ready or window-load handler for a particular page.
         * Although scripts in the WordPress core, Plugins and Themes may be
         * practising this, we should strive to set a better example in our own work.
         */

    })( jQuery );
    /**
     * Created by md.ohidulislam on 4/1/17.
     */
</script>

<style>

    .feed-progress-container {
        width:100%;
        color: white;
        text-align: center;
        font-weight: 300;
    }

    .feed-progress-bar {
        width:100%;
        background:#eee;
        padding:3px;
        border-radius:3px;
        box-shadow:inset 0px 1px 3px rgba(0,0,0,.2);
    }

    .feed-progress-bar-fill {
        height:20px;
        display:block;
        background:#3DC264;
        width:0%;
        border-radius:3px;

        -webkit-transition:width 0.8s ease;
        transition:width 0.8s ease;
    }
</style>