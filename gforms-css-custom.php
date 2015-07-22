<?php
/*
Plugin Name: Gravity Forms CSS Customizer
Description: Plugin that lets you keep only the good parts from the default Gravity Forms CSS
Version: 1.0.0
Author: Ollie Murphy
Author URI: https://www.jenniferwebdesignlasvegas.com/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/


//------------------------------------------

if (class_exists("GFForms")) {

    GFForms::include_addon_framework();

    class GFCSSCustom extends GFAddOn {

        protected $_version = "1.0.0";
        
        protected $_min_gravityforms_version = "1.7.9999";
        
        protected $_slug = "gforms-css-custom";
        
        protected $_path = "gforms-css-custom/gforms-css-custom.php";
        
        protected $_full_path = __FILE__;
        
        protected $_title = "Gravity Forms CSS Customizer";
        
        protected $_short_title = "CSS Customizer";

        public function pre_init(){
            parent::pre_init();
            // add tasks or filters here that you want to perform during the class constructor - before WordPress has been completely initialized
            // this function is basically my constructor

            $this->turn_off_default_css();

            $this->enable_gform_datepicker_css();
        }

        public function plugin_settings_fields() {
            return array(
                array(
                    "title"  => "CSS Customizer Settings",
                    "description" => "Choose which CSS from the default gravity form CSS that you want to keep",
                    "fields" => array(
                        array(
                            "label"   => "Disable Gravity Forms Default CSS? (required for plugin to work)",
                            "type"    => "radio",
                            "name"    => "gform_css",
                            "tooltip" => "This must be checked in order for the plugin to work",
                            "choices" => array(
                                array(
                                    "label" => "Yes"
                                ),
                                array(
                                    "label" => "No"
                                )
                            )
                        ),
                        array(
                            "label"   => "Choose CSS to Include",
                            "type"    => "checkbox",
                            "name"    => "checkboxgroup",
                            "tooltip" => "Pick the CSS components that you want to include",
                            "choices" => array(
                                array(
                                    "label" => "Honeypot Styling",
                                    "name"  => "honeypot"
                                ),
                                array(
                                    "label" => "Datepicker Styling",
                                    "name"  => "datepicker"
                                ),
                                array(
                                    "label" => "Radio Button Styling",
                                    "name"  => "radio"
                                ),
                                array(
                                    "label" => "Checkbox Styling",
                                    "name"  => "checkbox"
                                ),
                                array(
                                    "label" => "Address Field Styling",
                                    "name"  => "address"
                                ),
                                array(
                                    "label" => "Validation Errors Styling",
                                    "name"  => "validation"
                                ),
                                array(
                                    "label" => "Time Field Styling",
                                    "name"  => "time"
                                ),
                                array(
                                    "label" => "List Field Styling",
                                    "name"  => "list"
                                ),
                                array(
                                    "label" => "Really Simple Captcha Styling",
                                    "name"  => "captcha"
                                ),
                                array(
                                    "label" => "Math Challenge Styling",
                                    "name"  => "math"
                                ),
                                array(
                                    "label" => "Password Strength Indicator",
                                    "name"  => "password"
                                ),
                                array(
                                    "label" => "Credit Card Styling",
                                    "name"  => "credit"
                                ),
                                array(
                                    "label" => "Gravity Forms Columns Styling",
                                    "name"  => "columns"
                                ),
                                array(
                                    "label" => "Pagination and Page Break Styling",
                                    "name"  => "pagination"
                                )
                            )
                        )
                    )
                )
            );
        }

        public function scripts() {
            $scripts = array(
                array("handle"  => "my_script_js",
                      "src"     => $this->get_base_url() . "/js/my_script.js",
                      "version" => $this->_version,
                      "deps"    => array("jquery"),
                      "strings" => array(
                          'first'  => __("First Choice", "simpleaddon"),
                          'second' => __("Second Choice", "simpleaddon"),
                          'third'  => __("Third Choice", "simpleaddon")
                      ),
                      "enqueue" => array(
                          array(
                              "admin_page" => array("form_settings"),
                              "tab"        => "simpleaddon"
                          )
                      )
                ),

            );

            return array_merge(parent::scripts(), $scripts);
        }

        public function styles() {

            $styles = array(
                array("handle"  => "my_styles_css",
                      "src"     => $this->get_base_url() . "/css/my_styles.css",
                      "version" => $this->_version,
                      "enqueue" => array(
                          array("field_types" => array("poll"))
                      )
                )
            );

            return array_merge(parent::styles(), $styles);
        }

        public function get_plugin_settings() {
            return get_option( 'gravityformsaddon_' . $this->_slug . '_settings' );
        }

        public function get_plugin_setting( $setting_name ) {
            $settings = $this->get_plugin_settings();

            return isset( $settings[ $setting_name ] ) ? $settings[ $setting_name ] : null;
        }

        public function turn_off_default_css() {
            $gform_css = $this->get_plugin_setting( 'gform_css' );

            if ($gform_css === "Yes" ) {
                add_action( 'gform_enqueue_scripts', 'gform_dequeue_script_list',10 );
                function gform_dequeue_script_list() { 
                    wp_dequeue_style("gforms_reset_css");
                    wp_dequeue_style("gforms_formsmain_css");
                    wp_dequeue_style("gforms_ready_class_css");
                    wp_dequeue_style("gforms_browsers_css");
                    wp_dequeue_style("gforms_datepicker_css");
                    wp_dequeue_style("gforms_rtl_css");
                }

                add_action( 'gform_enqueue_scripts', 'gform_enqueue_dynamic',12 );
                function gform_enqueue_dynamic() { 
                    $plugin_url = plugins_url();
                    wp_enqueue_style('my-dynamic-css', $plugin_url .'/gforms-css-custom/dynamic-css.php');
                }
            } 
        }

        public function enable_gform_datepicker_css() {
            $gform_css = $this->get_plugin_setting( 'datepicker' );

            if ($gform_css) {
                add_action( 'gform_enqueue_scripts', 'gform_enqueue_datepicker',11 );
                function gform_enqueue_datepicker() { 
                    wp_enqueue_style("gforms_datepicker_css");
                }
            } 
        }

         public function is_datepicker_active() {
            $gform_css = $this->get_plugin_setting( 'datepicker' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_honeypot_active() {
            $gform_css = $this->get_plugin_setting( 'honeypot' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_radio_active() {
            $gform_css = $this->get_plugin_setting( 'radio' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_checkbox_active() {
            $gform_css = $this->get_plugin_setting( 'checkbox' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_address_active() {
            $gform_css = $this->get_plugin_setting( 'address' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_validation_active() {
            $gform_css = $this->get_plugin_setting( 'validation' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_time_active() {
            $gform_css = $this->get_plugin_setting( 'time' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_list_active() {
            $gform_css = $this->get_plugin_setting( 'list' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_columns_active() {
            $gform_css = $this->get_plugin_setting( 'columns' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_pagination_active() {
            $gform_css = $this->get_plugin_setting( 'pagination' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_captcha_active() {
            $gform_css = $this->get_plugin_setting( 'captcha' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_math_active() {
            $gform_css = $this->get_plugin_setting( 'math' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_password_active() {
            $gform_css = $this->get_plugin_setting( 'password' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_credit_active() {
            $gform_css = $this->get_plugin_setting( 'credit' );

            if ($gform_css) {
                return true;
            }
            return false;
        }


    }
   
    $simpleAddOn = new GFCSSCustom();

    // add class to address field if active
    if ( $simpleAddOn->is_address_active() ) {

        add_filter('gform_field_css_class', 'gcc_add_address_class', 0, 2);
        function gcc_add_address_class( $css_class, $field ) {
            
            if ($field['type'] === 'address') { 
                $css_class = $css_class . " gcc-address";
            }

            return $css_class;
        }
    }
}