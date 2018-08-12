<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://webappick.com
 * @since      1.0.0
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/includes
 * @author     WebAppick <dev@webappick.com>
 */
class Woo_Feed_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woo_Feed_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woo_Feed_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/woo-feed-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woo_Feed_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woo_Feed_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

//		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/woo-feed-public.js', array( 'jquery' ), $this->version, false );
//
//
//		$wpf_feed_nonce = wp_create_nonce('wpf_feed_nonce');
//		wp_localize_script($this->plugin_name, 'wpf_ajax_obj', array(
//			'wpf_ajax_url' => admin_url('admin-ajax.php'),
//			'nonce' => $wpf_feed_nonce,
//		));
//
//		wp_enqueue_script($this->plugin_name);
	}

}
/**
 * The class responsible for defining all actions that occur in the admin area.
 */
//require_once plugin_dir_path(dirname(__FILE__)) . 'public/partials/woo-feed-public-display.php';

