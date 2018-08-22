<?php
/**
 * Premium vs Free version
 *
 * @link       https://webappick.com/
 * @since      1.0.0
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/admin/partial
 * @author     Ohidul Islam <wahid@webappick.com>
 */
?>
<div class="wrap">
    <h2><?php echo _e('Settings', 'woo-feed'); ?></h2>
    <?php echo WPFFWMessage()->infoMessage1(); ?>
    <form action="" method="post">
        <table class="widefat fixed" >
            <thead>
            <tr>
                <th colspan="2"><b><?php echo _e('Common Settings', 'woo-feed'); ?></b></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Product per batch</td>
                <td>
                    <input type="text" name="limit" value="<?php echo (get_option('woo_feed_per_batch')?get_option('woo_feed_per_batch'):"200"); ?>">
                    <br><span><i>Don't change the value if you are not sure about this. Plugin may fail to make feed. </i></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td ><input type="submit" class="button button-primary" name="wa_woo_feed_config" value="Save"></td>
            </tr>
            </tbody>
        </table>
    </form>
</div>