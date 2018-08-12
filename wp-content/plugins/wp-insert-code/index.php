<?php
/**
 * Plugin Name: WP Insert Code
 * Plugin URI: http://antonhoelstad.dk
 * Description: Insert your code and scripts to your Wordpress website
 * Version: 1.0
 * Author: AntonAKH
 * Author URI: http://antonhoelstad.dk
 * License: GPL2
 */
 
 class ju_iccSettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Settings Admin', 
            'WP Insert Code', 
            'manage_options', 
            'ju-ic-code', 
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'ju_icc_option_name' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <!--<h2>Custom Code Settings</h2>-->           
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'ju_icc_option_group' );   
                do_settings_sections( 'ju_icc-setting-admin' );
                submit_button(); 
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            'ju_icc_option_group', // Option group
            'ju_icc_option_name', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'Custom Code Settings', // footer_code
            array( $this, 'print_section_info' ), // Callback
            'ju_icc-setting-admin' // Page
        );  

        add_settings_field(
            'header_code', // ID
            'Header Code', // footer_code 
            array( $this, 'header_code_callback' ), // Callback
            'ju_icc-setting-admin', // Page
            'setting_section_id' // Section           
        );      

        add_settings_field(
            'footer_code', 
            'Footer Code', 
            array( $this, 'footer_code_callback' ), 
            'ju_icc-setting-admin', 
            'setting_section_id'
        );   
		
		add_settings_field(
            'above_post_code', 
            'Above Post/Page Code', 
            array( $this, 'above_post_code_callback' ), 
            'ju_icc-setting-admin', 
            'setting_section_id'
        );   
		
		add_settings_field(
            'below_post_code', 
            'Below Post/Page Code', 
            array( $this, 'below_post_code_callback' ), 
            'ju_icc-setting-admin', 
            'setting_section_id'
        );   
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['header_code'] ) )
            //$new_input['header_code'] = sanitize_text_field( $input['header_code'] );
			$new_input['header_code'] = $input['header_code'];

        if( isset( $input['footer_code'] ) )
            $new_input['footer_code'] = $input['footer_code'];
			//$new_input['footer_code'] = sanitize_text_field( $input['footer_code'] );
			
		if( isset( $input['above_post_code'] ) )
            $new_input['above_post_code'] = $input['above_post_code'];
			//$new_input['above_post_code'] = sanitize_text_field( $input['above_post_code'] );
		
		if( isset( $input['below_post_code'] ) )
            $new_input['below_post_code'] = $input['below_post_code'];		
			//$new_input['below_post_code'] = sanitize_text_field( $input['below_post_code'] );		

        return $new_input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Enter your custom code below:';
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function header_code_callback()
    {
		printf(
			'<small>The following code will add to the <head> tag. Useful if you need to add additional scripts such as CSS or JS</small><br>'.
			'<textarea rows="10" cols="70" id="header_code" name="ju_icc_option_name[header_code]">%s</textarea>',
            //'<input type="text" id="header_code" name="ju_icc_option_name[header_code]" value="%s" />',
            isset( $this->options['header_code'] ) ? esc_attr( $this->options['header_code']) : ''
        );
    }

   /** 
     * Get the settings option array and print one of its values
     */
    public function footer_code_callback()
    {
        printf(
			'<small>The following code will add to the footer before the closing </body> tag. Useful if you need to Javascript or tracking code.</small><br>'.
			'<textarea rows="10" cols="70" id="footer_code" name="ju_icc_option_name[footer_code]">%s</textarea>',
            //'<input type="text" id="footer_code" name="ju_icc_option_name[footer_code]" value="%s" />',
            isset( $this->options['footer_code'] ) ? esc_attr( $this->options['footer_code']) : ''
        );
    }
   
    /** 
     * Get the settings option array and print one of its values
     */
    public function above_post_code_callback()
    {
        printf(
			'<textarea rows="10" cols="70" id="above_post_code" name="ju_icc_option_name[above_post_code]">%s</textarea>',
            //'<input type="text" id="footer_code" name="ju_icc_option_name[footer_code]" value="%s" />',
            isset( $this->options['above_post_code'] ) ? esc_attr( $this->options['above_post_code']) : ''
        );
    }
	
	/** 
     * Get the settings option array and print one of its values
     */
    public function below_post_code_callback()
    {
        printf(
			'<textarea rows="10" cols="70" id="below_post_code" name="ju_icc_option_name[below_post_code]">%s</textarea>',
            //'<input type="text" id="footer_code" name="ju_icc_option_name[footer_code]" value="%s" />',
            isset( $this->options['below_post_code'] ) ? esc_attr( $this->options['below_post_code']) : ''
        );
    }
	
}

if( is_admin() )
    $ju_icc_settings_page = new ju_iccSettingsPage();
	
	add_filter("the_content", "ju_icc_content");
	
	function ju_icc_content($content){
		if(is_page() || is_single()){
			if(get_option('ju_icc_option_name')){
				$ju_icc_option_name = get_option('ju_icc_option_name');
				return $ju_icc_option_name["above_post_code"] . "<br>" . $content . "<br>" . $ju_icc_option_name["below_post_code"];
			}
		}
		return $content;
	}
	
	add_action("init", "ju_icc_init");
	function ju_icc_init(){
		add_action('wp_head','ju_icc_header');
		add_action('wp_footer','ju_icc_footer');
	}
	

	function ju_icc_header()
	{
		if(get_option('ju_icc_option_name')){
			$ju_icc_header = get_option('ju_icc_option_name');
			echo $ju_icc_header["header_code"];
		}
	}
	
	

	function ju_icc_footer()
	{
		if(get_option('ju_icc_option_name')){
			$ju_icc_footer = get_option('ju_icc_option_name');
			echo $ju_icc_footer["footer_code"];	
		}
	}
	
	
	
	
	