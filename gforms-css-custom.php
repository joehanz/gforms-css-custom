<?php
/*
Plugin Name: Gravity Forms CSS Customizer
Description: Plugin that lets you keep only the good parts from the default Gravity Forms CSS
Version: 1.0.0
Author: Jennifer Web Design
Author URI: https://www.jenniferwebdesignlasvegas.com/
*/


//------------------------------------------
if (class_exists("GFForms")) {
    GFForms::include_addon_framework();

    class GFSimpleAddOn extends GFAddOn {

        protected $_version = "1.1";
        protected $_min_gravityforms_version = "1.7.9999";
        protected $_slug = "gforms-css-custom";
        protected $_path = "gforms-css-custom/gforms-css-custom.php";
        protected $_full_path = __FILE__;
        protected $_title = "Gravity Forms CSS Customizer";
        protected $_short_title = "CSS Customizer";

        public function init(){
            parent::init();
            add_filter("gform_submit_button", array($this, "form_submit_button"), 10, 2);
        }

        // Add the text in the plugin settings to the bottom of the form if enabled for this form
        function form_submit_button($button, $form){
            $settings = $this->get_form_settings($form);
            if(isset($settings["enabled"]) && true == $settings["enabled"]){
                $text = $this->get_plugin_setting("mytextbox");
                $button = "<div class='testing' >{$text}</div>" . $button;
            }
            return $button;
        }

        public function form_settings_fields($form) {
            return array(
                array(
                    "title"  => "Simple Form Settings",
                    "fields" => array(
                        array(
                            "label"   => "My checkbox",
                            "type"    => "checkbox",
                            "name"    => "enabled",
                            "tooltip" => "This is the tooltip",
                            "choices" => array(
                                array(
                                    "label" => "Enabled",
                                    "name"  => "enabled"
                                )
                            )
                        ),
                        array(
                            "label"   => "My checkboxes",
                            "type"    => "checkbox",
                            "name"    => "checkboxgroup",
                            "tooltip" => "This is the tooltip",
                            "choices" => array(
                                array(
                                    "label" => "First Choice",
                                    "name"  => "first"
                                ),
                                array(
                                    "label" => "Second Choice",
                                    "name"  => "second"
                                ),
                                array(
                                    "label" => "Third Choice",
                                    "name"  => "third"
                                )
                            )
                        ),
                        array(
                            "label"   => "My Radio Buttons",
                            "type"    => "radio",
                            "name"    => "myradiogroup",
                            "tooltip" => "This is the tooltip",
                            "choices" => array(
                                array(
                                    "label" => "First Choice"
                                ),
                                array(
                                    "label" => "Second Choice"
                                ),
                                array(
                                    "label" => "Third Choice"
                                )
                            )
                        ),
                        array(
                            "label"   => "My Horizontal Radio Buttons",
                            "type"    => "radio",
                            "horizontal" => true,
                            "name"    => "myradiogrouph",
                            "tooltip" => "This is the tooltip",
                            "choices" => array(
                                array(
                                    "label" => "First Choice"
                                ),
                                array(
                                    "label" => "Second Choice"
                                ),
                                array(
                                    "label" => "Third Choice"
                                )
                            )
                        ),
                        array(
                            "label"   => "My Dropdown",
                            "type"    => "select",
                            "name"    => "mydropdown",
                            "tooltip" => "This is the tooltip",
                            "choices" => array(
                                array(
                                    "label" => "First Choice",
                                    "value" => "first"
                                ),
                                array(
                                    "label" => "Second Choice",
                                    "value" => "second"
                                ),
                                array(
                                    "label" => "Third Choice",
                                    "value" => "third"
                                )
                            )
                        ),
                        array(
                            "label"   => "My Text Box",
                            "type"    => "text",
                            "name"    => "mytext",
                            "tooltip" => "This is the tooltip",
                            "class"   => "medium",
                            "feedback_callback" => array($this, "is_valid_setting")
                        ),
                        array(
                            "label"   => "My Text Area",
                            "type"    => "textarea",
                            "name"    => "mytextarea",
                            "tooltip" => "This is the tooltip",
                            "class"   => "medium merge-tag-support mt-position-right"
                        ),
                        array(
                            "label"   => "My Hidden Field",
                            "type"    => "hidden",
                            "name"    => "myhidden"
                        ),
                        array(
                            "label"   => "My Custom Field",
                            "type"    => "my_custom_field_type",
                            "name"    => "my_custom_field"
                        )
                    )
                )
            );
        }

        public function settings_my_custom_field_type(){
            ?>
            <div>
                My custom field contains a few settings:
            </div>
            <?php
                $this->settings_text(
                    array(
                        "label" => "A textbox sub-field",
                        "name" => "subtext",
                        "default_value" => "change me"
                    )
                );
                $this->settings_checkbox(
                    array(
                        "label" => "A checkbox sub-field",
                        "choices" => array(
                            array(
                                "label" => "Activate",
                                "name" => "subcheck",
                                "default_value" => true
                            )

                        )
                    )
                );
        }

        public function plugin_settings_fields() {
            return array(
                array(
                    "title"  => "CSS Customizer Settings",
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
                                    "label" => "Checkout Credit Card Styling",
                                    "name"  => "credit_card"
                                ),
                                array(
                                    "label" => "Payment Field Styling",
                                    "name"  => "payment"
                                ),
                                array(
                                    "label" => "Print Styling",
                                    "name"  => "print"
                                )
                            )
                        )
                    )
                )
            );
        }

        public function is_valid_setting($value){
            return strlen($value) < 10;
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

        public function is_credit_card_active() {
            $gform_css = $this->get_plugin_setting( 'credit_card' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_payment_active() {
            $gform_css = $this->get_plugin_setting( 'payment' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

        public function is_print_active() {
            $gform_css = $this->get_plugin_setting( 'print' );

            if ($gform_css) {
                return true;
            }
            return false;
        }

    }
   
    $simpleAddOn = new GFSimpleAddOn();

    $simpleAddOn->turn_off_default_css();

    $simpleAddOn->enable_gform_datepicker_css();

}