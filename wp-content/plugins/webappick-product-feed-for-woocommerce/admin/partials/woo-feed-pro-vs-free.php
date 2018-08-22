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
    <h2><?php echo _e('Pro vs Free', 'woo-feed'); ?></h2>
    <?php echo WPFFWMessage()->infoMessage1(); ?>


    <div class="woo_feed_free_manage_attribute">

        <div class="woo_feed_screen">
            <h2 class="woo-feed-screen-shot-title">Dynamic Attribute</h2>
            <p class="woo_feed_screen_des">
                The Dynamic Attribute combine the powerful features of the WooCommerce Product Feed Pro with the ability to set your own conditions for any types of the attribute.There are different types of Woocommerce users have different types & classes of products and services. So, they may need varieties of custom values to demonstrate their products. And we are giving the options to make dynamic attributes as your need. Also, it is possible to generate the data feed file according to the search engines requirements without changing the attributes in your store.
            </p>
            <p class="woo_feed_screen_des_2">
                 If you have both Simple Product and Variable Product with size, color and other attribute variations then you have to make a Dynamic Attribute for each attribute(color,size) which contain the value of that attribute for both Simple Product and Product Variations. See the example below.
            </p>
            <?php
            echo '<img class="woo_feed_screenshort" src="' . plugins_url( 'images/DA_1.png', dirname(__FILE__) ) . '" > ';
            ?>
            <p class="woo_feed_screen_des_2">
                 You can change your product price dynamically if you need.
            </p>
            <?php
            echo '<img class="woo_feed_screenshort" src="' . plugins_url( 'images/DA_2.png', dirname(__FILE__) ) . '" > ';
            ?>
            <p class="woo_feed_screen_des_2">
                You can add vat with your price.
            </p>
            <?php
            echo '<img class="woo_feed_screenshort" src="' . plugins_url( 'images/DA_3.png', dirname(__FILE__) ) . '" > ';
            ?>
            <p class="woo_feed_screen_des_2">
                 It's possible to make Custom Label by searching your product information.
            </p>
            <?php
            echo '<img class="woo_feed_screenshort" src="' . plugins_url( 'images/DA_4.png', dirname(__FILE__) ) . '" > ';
            ?>
        </div>

        <div class="woo_feed_screen">
            <h2 class="woo-feed-screen-shot-title">Category Mapping (To Reach Your Buyer)</h2>
            <p class="woo_feed_screen_des">
                Categories are the most important key to getting products to the search result . It is best practice to assign most matching shopping engine category to your store category for each product. During the creating of your feeds, you can also create a category for that particular product. And after creating the category you’ll get an option to map it to your marketplace category so that you can make two categories aligned to each other. This process is totally dynamic by our plugin & you can map all of your categories to make it more relevant & reachable to buyers.
                <br/><iframe width="560" height="315" src="https://www.youtube.com/embed/uofoOSwkCG8" frameborder="0" allowfullscreen></iframe>
            </p>

        </div>

        <div class="woo_feed_screen">
            <h2 class="woo-feed-screen-shot-title">Smart Filter & Conditions</h2>
            <p class="woo_feed_screen_des">Smart Filters help you to exclude the Non-Profitable , Out of Season, Hidden or Drafted Products you don’t want to share. Also, Its high filtering options help users to filter products according to product titles, price, availability of stocks, user ratings, total sales and other extensive product specifications.</p>
            <?php
            echo '<img class="woo_feed_screenshort" src="' . plugins_url( 'images/filter.png', dirname(__FILE__) ) . '" > ';
            ?>
        </div>

        <div class="woo_feed_screen">
            <h2 class="woo-feed-screen-shot-title">Multi Language Feed (WPML)</h2>
            <p class="woo_feed_screen_des">WooCommerce Product Feed Pro is compatible with <b>WPML WooCommerce plugin</b>. And by supporting WPML this makes it possible for the e-commerce owners to create product feed in different languages. This enables the e-commerce owners the chance to globalize their business in minutes because you always have better chance of selling something if you are selling it in the native language.</p>

        </div>

        <div class="woo_feed_screen">
            <h2 class="woo-feed-screen-shot-title">Custom Taxonomy</h2>
            <p class="woo_feed_screen_des">The user can easily use any custom taxonomy or others WooCommerce plugin or extensions taxonomy value into the feed. For Example Product Brand, Model No size etc. So you can easily use those value into your feed.</p>
        </div>

    </div>

    <table class="widefat fixed" >
        <thead>
        <tr>
            <th colspan="3" style="font-size: 36px;text-align: center;color: #00b9eb;">Free vs Premium</th>
        </tr>
            <tr>
                <th><h3>Features</h3></th>
                <th style="width: 30%;text-align: center;"><h3>Free</h3></th>
                <th style="width: 30%;text-align: center;"><h3>Premium</h3></th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><b>Export Product Variations</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Custom Feed Template</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Support All Comparison Shopping Engines</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Support All Affiliate Networks</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Auto Feed Update</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Product Attributes</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Unlimited Feed</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>CSV, TXT and XML Feed</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Pre Configured Feed Template</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Variations & Custom Attribute Value</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Upload Feed via FTP</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Unlimited Products</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b> &nbsp;&nbsp; (2000 Products Only)</td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>

        <tr>
            <td><b>Product Filtering by Id,SKU, Title, Category and Others Attributes.</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Feed By Category</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Customized Product Title</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b><a href="https://wpml.org/">WPML:</a> Multi Language Feed Making </b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Product Taxonomy value like Brand or Others Plugin data</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>WooCommerce Composite Products</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>WooCommerce Bundle Products</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Remove Variation Products</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Remove Parent Products</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Category Mapping</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Dynamic Attributes</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Price With Tax</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Conditional Pricing</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>WP Post Meta Value</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>WP Options Value</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>
        <tr>
            <td><b>Advanced Command ( str_replace, ucfirst, ucwords, strtoupper, strtolower, currency convert, strig_tags, htmlentities)</b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color:red;" class="dashicons dashicons-no"></span></b></td>
            <td style="text-align: center;"><b><span style="font-size: 25px;color: green;" class="dashicons dashicons-yes"></span></b></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td style="text-align: center;"><a href="http://bit.ly/2KIwvTt" target="_blank"><button class="button button-primary">Buy Now</button></a></td>
        </tr>
        </tbody>
    </table>
</div>