<?php

/**
 * A class definition responsible for processing and mapping product according to feed rules and make the feed
 *
 * @link       https://webappick.com/
 * @since      1.0.0
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/includes
 * @author     Ohidul Islam <wahid@webappick.com>
 */
class Woo_Feed_Message
{
    public function infoMessage1()
    {
        $html=<<<EOD
        <table class="widefat fixed">
        <tbody>
        <tr>
            <td align="center"><b><a target="_blank" style="color:#ee264a;"
                                     href="http://bit.ly/2KIwvTt">GET PREMIUM</a></b></td>
            <td align="center"><b><a target="_blank" style="color:#0073aa;"
                                     href="http://webappick.helpscoutdocs.com/">DOCUMENTATION</a></b></td>
            <td align="center"><b><a style="color:#ee264a;" target="_blank"
                                     href="http://bit.ly/2u6giNz">VIDEOS TUTORIALS</a></b>
            </td>
            <td align="center"><b><a target="_blank" style="color:#0DD41E;"
                                     href="https://webappick.com/support/">FREE SUPPORT & HELP ( support@webappick.com )</a></b></td>
        </tr>
        </tbody>
    </table>
        <table class="widefat fixed">
        <tbody>
        <tr>
            <td align='center'>If you like <b>WooCommerce Product Feed</b>, Please leave us a <a target="_blank"  style="color:#0073aa;text-decoration: underline" href="https://wordpress.org/support/plugin/webappick-product-feed-for-woocommerce/reviews/?rate=5#new-post">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</a> rating <a target="_blank"  style="color:#0073aa;" href="https://wordpress.org/support/plugin/webappick-product-feed-for-woocommerce/reviews/?rate=5#new-post">here.</a> </td>         
        </tr>
        </tbody>
    </table><br>
EOD;
       return $html; 
    }
}

function WPFFWMessage(){
    return new Woo_Feed_Message();
}