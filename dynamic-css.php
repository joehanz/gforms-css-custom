<?php 
	header("Content-type: text/css; charset: UTF-8");

	// load in wp-load so that wordpress and plugin functions are available
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );

	// init plugin class
	$simpleAddOn = new GFSimpleAddOn();

	if ($simpleAddOn->is_radio_active()) { ?>

.gform_wrapper ul {
	list-style:none;
}

.gform_wrapper .top_label .gfield_label {
	margin: .625em 0 .5em;
	font-weight: 700;
	display: -moz-inline-stack;
	display: inline-block;
	line-height: 1.3;
	clear: both;
}
<?php }

	if ($simpleAddOn->is_honeypot_active()) { ?>
.gform_validation_container,
.gform_wrapper .gform_validation_container,
body .gform_wrapper .gform_body ul.gform_fields li.gfield.gform_validation_container,
body .gform_wrapper li.gform_validation_container,
body .gform_wrapper ul.gform_fields li.gfield.gform_validation_container {
    display: none!important;
    position: absolute!important;
    left: -9000px
}

<?php } // end if statement

	if ($simpleAddOn->is_datepicker_active()) { ?>
.gform_wrapper .datepicker {
    width: 6.75em!important
}

.gform_wrapper input.datepicker.datepicker_with_icon {
    margin-right: .25em!important;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1
}

body .gform_wrapper img.ui-datepicker-trigger {
    width: 17px!important;
    height: 16px!important;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1
}
<?php } // end if statement

	if ($simpleAddOn->is_radio_active()) { ?>

.gform_wrapper ul.gfield_radio {
    margin: 6px 0;
    padding: 0
}

.gform_wrapper ul.gfield_radio li {
    overflow: hidden;
    padding: 0!important
}

.gform_wrapper .gfield_radio li label {
    display: block;
    margin: 0 0 0 24px;
    padding: 0;
    width: auto;
    line-height: 1.5;
    vertical-align: top
}

.gform_wrapper .left_label ul.gfield_radio,
.gform_wrapper .right_label ul.gfield_radio {
    margin-left: 30%!important;
    overflow: hidden
}

.gform_wrapper form ul.left_label li ul.gfield_radio li,
.gform_wrapper form ul.right_label li ul.gfield_radio li,
.gform_wrapper ul.left_label li ul.gfield_radio li,
.gform_wrapper ul.right_label li ul.gfield_radio li {
    margin-bottom: 10px
}

.gform_wrapper ul.gfield_radio li input[type=radio] {
    width: auto!important
}

.gform_wrapper ul.gfield_radio li input[type=radio]:checked+label {
    font-weight: 700
}

.gform_wrapper .gfield_radio li {
    position: relative;
    margin: 0 0 .5em;
    line-height: 1.3
}

.gform_wrapper .gfield_radio li input[type=radio] {
    float: left;
    margin-top: 2px
}

.gform_wrapper ul.gfield_radio li input+input {
    margin-left: .25em
}
.gform_wrapper ul.gfield_radio li input[value=gf_other_choice] {
    margin-right: .375em;
    margin-top: .25em
}

.gform_wrapper li.gfield ul.gfield_radio li input[type=radio]+input[type=text] {
    width: 45.25%
}

/* Browser Specific CSS */
.gform_wrapper.gf_browser_safari .gfield_radio li input[type=radio] {
    margin-top: .25em
}

.gform_wrapper.gf_browser_chrome .gfield_radio li input[type=radio] {
    margin-top: .375em
}

.gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio] {
    margin-left: .063em
}

.gform_wrapper.gf_browser_gecko .gfield_radio li input[type=radio] {
    margin-top: .438em
}

.gform_wrapper.gf_browser_ie .gfield_radio li {
    line-height: 1.3em!important
}

.gform_wrapper.gf_browser_ie .gfield_radio li input[type=radio] {
    margin-top: 0
}

<?php } // end if statement

	if ($simpleAddOn->is_validation_active()) { ?>

/* VALIDATION ERRORS CSS */

.gform_wrapper .gfield_description {
    font-size: .875em;
    line-height: 1.5;
    clear: both;
    font-family: inherit;
    letter-spacing: normal;
}

.gform_wrapper .gfield_description+.gform_wrapper .gfield_description.validation_message, 
.gform_wrapper .ginput_container+.gfield_description.validation_message {
    margin-top: .375em;
}

.gform_wrapper .gfield_description.validation_message, .gform_wrapper .top_label .gfield_description.validation_message {
    padding: .625em 0!important;
}

.gform_wrapper .gfield_required {
    color: #790000;
    margin-left: .25em
}
.gform_wrapper li.gfield.gfield_error,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required.gfield_creditcard_warning {
    background-color: #FFDFE0;
    margin-bottom: .375em!important;
    padding: 0;
    border-top: 1px solid #C89797;
    border-bottom: 1px solid #C89797
}
.gform_wrapper li.gfield.gfield_creditcard_warning {
    padding-bottom: 1em!important;
    border: 1px solid #790000;
    border-top: none
}
.gform_wrapper li.gfield.gfield_creditcard_warning div.gfield_creditcard_warning_message {
    font-size: 1em;
    font-family: inherit;
    min-height: 1.563em;
    background-color: #790000;
    color: #FFF;
    max-width: 100%
}
.gform_wrapper li.gfield.gfield_creditcard_warning div.gfield_creditcard_warning_message span {
    display: block;
    padding: .625em;
    line-height: 1.5;
    letter-spacing: .2pt
}
li.gfield+li.gfield.gfield_creditcard_warning {
    margin-top: 1em!important
}
.gform_wrapper .top_label .gfield_error .ginput_container {
    max-width: 99%
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.ginput_container,
.gform_wrapper li.gfield_html {
    max-width: 97.5%
}
.gform_wrapper .top_label .gfield_error {
    width: 97%
}
.gform_wrapper .top_label .gfield_error input.large,
.gform_wrapper .top_label .gfield_error select.large,
.gform_wrapper .top_label .gfield_error textarea.textarea {
    width: 97.5%
}
.gform_wrapper .left_label .gfield_error input.large,
.gform_wrapper .left_label .gfield_error select.large,
.gform_wrapper .left_label .gfield_error textarea.textarea,
.gform_wrapper .right_label .gfield_error input.large,
.gform_wrapper .right_label .gfield_error select.large,
.gform_wrapper .right_label .gfield_error textarea.textarea {
    width: 66%
}
.gform_wrapper .gfield_error .gfield_label {
    color: #790000
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required {
    margin-top: .75em;
    margin-bottom: .75em!important
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_description,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.ginput_container,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required fieldset legend.gfield_label,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required label.gfield_label {
    margin-left: 6px
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_time_ampm.ginput_container,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_time_minute.ginput_container {
    margin-left: 0
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_description {
    max-width: 97.5%;
    padding-right: 6px!important
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.ginput_container,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required label.gfield_label {
    margin-top: .75em
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required fieldset legend.gfield_label {
    position: relative;
    top: .75em
}
.gform_wrapper div.validation_error {
    color: #790000;
    font-size: 1.2em;
    font-weight: 700;
    margin-bottom: 1.6em;
    border-top: 2px solid #790000;
    border-bottom: 2px solid #790000;
    padding: 1em 0;
    clear: both;
    width: 97.5%
}
.gform_wrapper ol.validation_list {
    clear: both;
    width: 97.5%;
    margin-bottom: 1.6em;
    color: #790000
}
.gform_wrapper ol.validation_list li {
    list-style-type: decimal!important
}
.gform_wrapper ol.validation_list li a {
    color: #790000
}
.gform_wrapper ol.validation_list:after {
    content: ""
}
.gform_wrapper div#error {
    margin-bottom: 1.6em
}
.gform_wrapper table.gfield_list tbody tr td.gfield_list_icons {
    vertical-align: middle!important
}
body .gform_wrapper table.gfield_list tbody tr td.gfield_list_icons button[type=button].add_list_item,
body .gform_wrapper table.gfield_list tbody tr td.gfield_list_icons button[type=button].delete_list_item {
    background-color: transparent!important;
    background-position: 0 0;
    background-size: 1em 1em!important;
    background-repeat: no-repeat;
    border: none!important;
    width: 1em!important;
    height: 1em!important;
    vertical-align: middle!important;
    opacity: .5
}

div.gf_page_steps+div.validation_error {
    margin-top: 1em
}
.gform_wrapper div.gfield_description.validation_error {
    color: #790000;
    font-weight: 700;
    font-size: .875em;
    line-height: 1.2;
    margin-bottom: 1em
}
.gform_wrapper .validation_message {
    color: #790000;
    font-weight: 700;
    letter-spacing: normal
}
.gform_wrapper li.gfield_error input[type=email],
.gform_wrapper li.gfield_error input[type=number],
.gform_wrapper li.gfield_error input[type=password],
.gform_wrapper li.gfield_error input[type=tel],
.gform_wrapper li.gfield_error input[type=text],
.gform_wrapper li.gfield_error input[type=url],
.gform_wrapper li.gfield_error textarea {
    border: 1px solid #790000
}

.gform_wrapper li.gfield_error div.ginput_complex.ginput_container label,
.gform_wrapper li.gfield_error ul.gfield_checkbox,
.gform_wrapper li.gfield_error ul.gfield_radio {
    color: #790000
}

<?php } // end if statement
