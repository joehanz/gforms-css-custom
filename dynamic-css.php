<?php 
	header("Content-type: text/css; charset: UTF-8");

	// load in wp-load so that wordpress and plugin functions are available
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
    require_once('gforms-css-custom.php');

	if ($simpleAddOn->is_radio_active() || $simpleAddon->is_checkbox_active()) { ?>

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

    if ($simpleAddOn->is_checkbox_active() ) { ?>

        .gform_wrapper ul.right_label li ul.gfield_checkbox li,
        .gform_wrapper form ul.right_label li ul.gfield_checkbox li,
        .gform_wrapper ul.left_label li ul.gfield_checkbox li,
        .gform_wrapper form ul.left_label li ul.gfield_checkbox li {
            margin-bottom: 10px;
        }

        .gform_wrapper .left_label ul.gfield_checkbox,
        .gform_wrapper .right_label ul.gfield_checkbox {
            margin-left: 32%;
            overflow: hidden;
        }

        .gform_wrapper ul.gfield_checkbox li input[type=checkbox] {
            width: auto !important;
        }

        .gform_wrapper .gfield_checkbox li {
            position: relative;
            margin: 0 0 .5em;
        }

        .gform_wrapper ul.gfield_checkbox {
            margin: 6px 0;
            padding: 0;
        }

        .gform_wrapper .gfield_checkbox li label {
            display: block;
            margin: 0 0 0 24px;
            padding: 0;
            width: auto;
            line-height: 1.5;
            vertical-align: top;
        }

        .gform_wrapper .gfield_checkbox li input[type=checkbox],
        .gform_wrapper .gfield_checkbox li input {
            float: left;
            margin-top: 7px;
        }

        .gform_wrapper ul.gfield_checkbox li input[type="checkbox"]:checked+label {
            font-weight: bold;
        }

        .gform_wrapper.gf_browser_safari .gfield_checkbox li input[type=checkbox] {
            margin-top: 7px;
        }

        .gform_wrapper.gf_browser_chrome .gfield_checkbox li input[type=checkbox],
        .gform_wrapper.gf_browser_chrome .gfield_checkbox li input {
            margin-top: 7px;
        }

        .gform_wrapper.gf_browser_ie .gfield_checkbox li input[type=checkbox],
        .gform_wrapper.gf_browser_ie .gfield_checkbox li input {
            margin-top: 0;
        }

<?php }

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
    padding: 10px 20px;
    border-top: 1px solid #C89797;
    border-bottom: 1px solid #C89797;

    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
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
    max-width: none
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.ginput_container,
.gform_wrapper li.gfield_html {
    max-width: none
}
.gform_wrapper .top_label .gfield_error {
    width: 100%;
}
.gform_wrapper .top_label .gfield_error input.large,
.gform_wrapper .top_label .gfield_error select.large,
.gform_wrapper .top_label .gfield_error textarea.textarea {
    width: 100%
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

.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_time_ampm.ginput_container,
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_time_minute.ginput_container {
    margin-left: 0
}
.gform_wrapper li.gfield.gfield_error.gfield_contains_required div.gfield_description {
    max-width: none;
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

    if ($simpleAddOn->is_pagination_active()) { ?>

/* multi-page form paging ------------------------------------------------------*/

.gform_wrapper .gform_page_footer {
    margin: 20px 0;
    width: 99%;
    border-top: 1px dotted #CCC;
    padding: 16px 0 0 0;
}

.gform_wrapper .gform_page_footer .button.gform_button  {
    margin-right: 10px;
}

/* multi-page progress bar  ------------------------------------------------------*/


.gform_wrapper .gf_progressbar_wrapper {
    clear: both;
    width: 99%;
    margin: 0 0 8px 0;
    padding: 0 0 16px 0;
    border-bottom: 1px dotted #CCC;
}

.gform_wrapper .gf_progressbar_wrapper h3.gf_progressbar_title {
    font-size: 13px;
    line-height: 1em !important;
    margin: 0 0 6px 0 !important;
    padding: 0 !important;
    clear: both;
    filter: alpha(opacity=60);
    -moz-opacity: 0.6;
    -khtml-opacity: 0.6;
    opacity: 0.6;
}

.gform_wrapper .gf_progressbar {
    width: 99%;
    height: 20px;
    overflow: hidden;
    line-height: 20px !important;
    border: 1px solid #EEE;
    background-image: url(../images/gf-percentbar-bg.png);
    background-repeat: repeat-x;
    background-position: bottom;
    background-color: #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -moz-box-shadow: 0 0 4px 0 rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 4px 0 rgba(0,0,0,0.2);
    box-shadow: 0 0 4px 0 rgba(0,0,0,0.2);
}

.gform_wrapper .gf_progressbar_percentage {
    height: 20px;
    text-align: right;
    font-family: helvetica,arial,sans-serif;
    font-size: 13px !important;
    text-shadow: 0 1px 1px rgba(0,0,0,0.50);
}

.gform_wrapper .gf_progressbar_percentage span {
    display: block;
    width: auto;
    float: right;
    margin-right: 5px;
    margin-left: 5px;
}

.gform_wrapper .gf_progressbar_percentage.percentbar_0 span {
    color: #959595;
    text-shadow: none;
}

.gform_wrapper .percentbar_blue {
    background-image: url(../images/gf-percentbar-blue.png);
    background-repeat: repeat-x;
    background-color: #0072BC;
    color: #FFF;
}

.gform_wrapper .percentbar_gray {
    background-image: url(../images/gf-percentbar-gray.png);
    background-repeat: repeat-x;
    background-color: #666;
    color: #FFF;
}

.gform_wrapper .percentbar_green {
    background-image: url(../images/gf-percentbar-green.png);
    background-repeat: repeat-x;
    background-color: #94DC21;
    color: #FFF;
}

.gform_wrapper .percentbar_orange {
    background-image: url(../images/gf-percentbar-orange.png);
    background-repeat: repeat-x;
    background-color: #DC7021;
    color: #FFF;
}

.gform_wrapper .percentbar_red {
    background-image: url(../images/gf-percentbar-red.png);
    background-repeat: repeat-x;
    background-color: #DC2521;
    color: #FFF;
}

.gform_wrapper .percentbar_custom {
    background-image: url(../images/gf-percentbar-custom.png);
    background-repeat: repeat-x;
}

/* multi-page steps ------------------------------------------------------*/


.gform_wrapper .gf_page_steps {
    width: 99%;
    margin: 0 0 8px 0;
    padding: 0 0 4px 0;
    border-bottom: 1px dotted #CCC;
}

.gform_wrapper .gf_step {
    width: auto !important;
    margin: 0 10px 10px 0;
    font-size: 14px;
    height: 20px;
    line-height: 20px !important;
    filter: alpha(opacity=20);
    -moz-opacity: 0.2;
    -khtml-opacity: 0.2;
    opacity: 0.2;
    font-family: arial,sans-serif;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
}

.gform_wrapper .gf_step span.gf_step_number {
    font-size: 20px;
    float: left;
    font-family: arial,sans-serif;
}

.gform_wrapper .gf_step.gf_step_active {
    filter: alpha(opacity=100);
    -moz-opacity: 1.0;
    -khtml-opacity: 1.0;
    opacity: 1.0;
}

.gform_wrapper .gf_step_clear {
    display: block;
    clear: both;
    height: 1px;
    overflow: hidden;
}

<?php } // end if statement

    if ($simpleAddOn->is_list_active()) { ?>

/* list fields added in v.1.6 -----------------------------------------------------------------*/

.gform_wrapper table.gfield_list,
.gform_wrapper table.gfield_list caption,
.gform_wrapper table.gfield_list tbody,
.gform_wrapper table.gfield_list tfoot,
.gform_wrapper table.gfield_list thead,
.gform_wrapper table.gfield_list tr,
.gform_wrapper table.gfield_list th,
.gform_wrapper table.gfield_list td {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

.gform_wrapper table.gfield_list {
    border-spacing: 0;
    border-collapse:collapse;
}

.gform_wrapper table.gfield_list thead th {
    font-weight: bold;
    text-align: left;
}

.gform_wrapper li.gfield.gfield_error table.gfield_list thead th {
    color: #790000;
}

.gform_wrapper table.gfield_list thead,
.gform_wrapper table.gfield_list tr {
    padding: 0;
    margin: 0;
}

.gform_wrapper table.gfield_list th,
.gform_wrapper table.gfield_list td {
    padding:0 0 0.5em 0;
}

.gform_wrapper table.gfield_list th + th,
.gform_wrapper table.gfield_list td + td {
    padding:0 0 0.5em 0.7em;
}

.gform_wrapper .left_label .gfield_list, .gform_wrapper .right_label .gfield_list {
    width: 64%;
}

.gform_wrapper .top_label .gfield_list {
    width: 99%;
}

.gform_wrapper .left_label .gf_list_one_column, .gform_wrapper .right_label .gf_list_one_column {
    width: 45%;
}

.gform_wrapper .top_label .gf_list_one_column {
    width: 46%;
}

.gform_wrapper .gfield_list input{
    width: 98%;
}

.gfield_icon_disabled {
    cursor: default !important;
    filter: alpha(opacity=60);
    -moz-opacity: 0.6;
    -khtml-opacity: 0.6;
    opacity: 0.6;
}

.gform_wrapper table.gfield_list td.gfield_list_icons {
    min-width: 45px !important;
}

<?php } // end if statement

    if ($simpleAddOn->is_captcha_active()) { ?>

.gform_wrapper .gfield_captcha_input_container {
    padding-top: 3px;
}

.gform_wrapper .simple_captcha_small input {
    width: 100px;
}

.gform_wrapper .simple_captcha_medium input {
    width: 150px;
}

.gform_wrapper .simple_captcha_large input {
    width: 200px;
}

.gform_wrapper .gform_wrapper .left_label .simple_captcha_small,
.gform_wrapper .right_label .simple_captcha_small,
.gform_wrapper .left_label .simple_captcha_medium,
.gform_wrapper .right_label .simple_captcha_medium,
.gform_wrapper .left_label .simple_captcha_large,
.gform_wrapper .right_label .simple_captcha_large {
    margin-left: 32%;
}

.gform_wrapper .gfield_captcha_container img.gfield_captcha {
    border: none !important;
    background: none !important;
    float: none !important;
    margin: 0 !important;
    padding: 0 !important;
}

.gform_wrapper.gf_browser_safari .left_label #recaptcha_area #recaptcha_table,
.gform_wrapper.gf_browser_safari .right_label #recaptcha_area #recaptcha_table {
    margin-left: 32%;
}

.gform_wrapper.gf_browser_chrome .left_label #recaptcha_area #recaptcha_table,
.gform_wrapper.gf_browser_chrome .right_label #recaptcha_area #recaptcha_table {
    margin-left: 32%;
}

.gform_wrapper.gf_browser_opera .left_label #recaptcha_area #recaptcha_table,
.gform_wrapper.gf_browser_opera .right_label #recaptcha_area #recaptcha_table {
    margin-left: 32%;
}

.gform_wrapper.gf_browser_ie .gform_body ul.gform_fields li.gfield .ginput_container #recaptcha_widget_div #recaptcha_area {
    width: 99%!important;
}

.gform_wrapper.gf_browser_ie .gform_body ul.gform_fields li.gfield .ginput_container #recaptcha_widget_div #recaptcha_area {width: 99%!important}
.gform_wrapper.gf_browser_ie .left_label #recaptcha_area #recaptcha_table,
.gform_wrapper.gf_browser_ie .right_label #recaptcha_area #recaptcha_table {
    margin-left: 32%;
}

<?php } // end if statement

    if ($simpleAddOn->is_math_active()) { ?>

.gform_wrapper .math_small input {
    width: 69px;
}

.gform_wrapper .math_medium input {
    width: 90px;
}

.gform_wrapper .math_large input {
    width: 108px;
}

.gform_wrapper .left_label .math_small,
.gform_wrapper .right_label .math_small,
.gform_wrapper .left_label .math_medium,
.gform_wrapper .right_label .math_medium,
.gform_wrapper .left_label .math_large,
.gform_wrapper .right_label .math_large {
    margin-left: 32%;
}

<?php } // end if statement

    if ($simpleAddOn->is_password_active()) { ?>

/* password strength indicator -----------------------------------------------------------------*/


.gform_wrapper .gfield_password_strength {
    border: 1px solid #DDD;
    margin: 0;
    padding: 3px 5px;
    text-align: center;
    width: 200px;
    background-color: #EEE;
}

.gform_wrapper .gfield_password_strength.bad {
    background-color: #FFB78C;
    border-color: #FF853C;
}

.gform_wrapper .gfield_password_strength.good {
    background-color: #FFEC8b;
    border-color: #FC0;
}

.gform_wrapper .gfield_password_strength.short,
.gform_wrapper .gfield_password_strength.mismatch {
    background-color: #FFA0A0;
    border-color: #f04040;
}

.gform_wrapper .gfield_password_strength.strong {
    background-color: #C3FF88;
    border-color: #8DFF1C;
}

<?php } // end if statement

    if ($simpleAddOn->is_credit_active()) { ?>

/* credit card icons ------------------------------------------------------*/


.gform_wrapper .gform_card_icon_container {
    margin: 8px 0 6px 0;
    height: 32px;
}

.gform_wrapper div.gform_card_icon {
    margin-right: 4px;
    text-indent: -9000px;
    background-image: url(../images/gf-creditcard-icons.png);
    background-repeat: no-repeat;
    width: 36px;
    height: 32px;
    float: left;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_visa {
    background-position: 0 0;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_visa {
    background-position: 0 -32px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_visa {
    background-position: 0 -64px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_mastercard {
    background-position: -36px 0;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_mastercard {
    background-position: -36px -32px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_mastercard {
    background-position: -36px -64px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_amex {
    background-position: -72px 0;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_amex {
    background-position: -72px -32px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_amex {
    background-position: -72px -64px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_discover {
    background-position: -108px 0;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_discover {
    background-position: -108px -32px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_discover {
    background-position: -108px -64px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_maestro {
    background-position: -144px 0;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_maestro {
    background-position: -144px -32px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_maestro {
    background-position: -144px -64px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_jcb {
    background-position: -180px 0;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_jcb {
    background-position: -180px -32px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style1 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_jcb {
    background-position: -180px -64px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_visa {
    background-position: 0 -192px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_visa {
    background-position: 0 -224px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_visa {
    background-position: 0 -256px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_mastercard {
    background-position: -36px -192px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_mastercard {
    background-position: -36px -224px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_mastercard {
    background-position: -36px -256px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_amex {
    background-position: -72px -192px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_amex {
    background-position: -72px -224px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_amex {
    background-position: -72px -256px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_discover {
    background-position: -108px -192px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_discover {
    background-position: -108px -224px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_discover {
    background-position: -108px -256px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_maestro {
    background-position: -144px -192px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_maestro {
    background-position: -144px -224px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_maestro {
    background-position: -144px -256px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_jcb {
    background-position: -180px -192px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_selected.gform_card_icon_jcb {
    background-position: -180px -224px;
}

.gform_wrapper .gform_card_icon_container.gform_card_icon_style2 div.gform_card_icon.gform_card_icon_inactive.gform_card_icon_jcb {
    background-position: -180px -256px;
}

/* credit card fields ------------------------------------------------------*/


.gform_card_icon_container input[type=radio]#gform_payment_method_creditcard {
    float: left;
    position: relative;
    top: 4px!important
}

.gform_wrapper .ginput_complex .ginput_cardinfo_left,
.gform_wrapper .ginput_complex .ginput_cardinfo_right {
    min-height: 43px;
    position: relative;
    float: left;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_left {
    width: 50%;
    margin-right: 1%;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_right {
    min-width: 85px !important;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_left label,
.gform_wrapper .ginput_complex .ginput_cardinfo_right label {
    white-space: nowrap !important;
}

.gform_wrapper .ginput_complex span.ginput_cardextras {
    display: block;
    overflow: hidden;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_left span.ginput_card_expiration_container {
    position: relative;
    display: block;
    min-width: 160px !important;
}

.gform_wrapper .ginput_complex select.ginput_card_expiration.ginput_card_expiration_month,
.gform_wrapper .ginput_complex select.ginput_card_expiration.ginput_card_expiration_year {
    width: 48% !important;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_left select.ginput_card_expiration.ginput_card_expiration_month {
    margin-right: 4px;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_right input.ginput_card_security_code {
    max-width: 50% !important;
}

.gform_wrapper .ginput_complex .ginput_cardinfo_right span.ginput_card_security_code_icon {
    width: 32px;
    height: 23px;
    background-image: url(../images/gf-creditcard-icons.png);
    background-repeat: no-repeat;
    background-position: 0 -128px;
    position: relative;
    top: -1px;
    left: 6px;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
}

.gform_wrapper.gf_browser_gecko .ginput_complex .ginput_cardinfo_left select.ginput_card_expiration.ginput_card_expiration_month {
    margin-right: 2px;
}

.gform_wrapper.gf_browser_ie .ginput_complex .ginput_cardinfo_right span.ginput_card_security_code_icon {
    position: relative;
    top: -1px;
    left: 4px;
}

<?php } // end if statement

    if ($simpleAddOn->is_time_active()) { ?>
.gform_wrapper .gfield_time_hour,
.gform_wrapper .gfield_time_minute,
.gform_wrapper .gfield_date_month,
.gform_wrapper .gfield_date_day,
.gform_wrapper .gfield_date_year {
    width: 70px;
    vertical-align: top;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
}

.gform_wrapper .gfield_date_month,
.gform_wrapper .gfield_date_day,
.gform_wrapper .gfield_date_year {
    margin-right: 12px;
}

.gform_wrapper .gfield_date_dropdown_month,
.gform_wrapper .gfield_date_dropdown_day,
.gform_wrapper .gfield_date_dropdown_year {
    vertical-align: top;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
}

.gform_wrapper .gfield_date_dropdown_month,
.gform_wrapper .gfield_date_dropdown_day,
.gform_wrapper .gfield_date_dropdown_year {
    margin-right: 6px;
}

.gform_wrapper .gfield_time_ampm {
    vertical-align: top;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
}

.gform_wrapper .gfield_time_ampm select {
    width: 60px !important;
}

.gform_wrapper .gfield_time_hour input,
.gform_wrapper .gfield_time_minute input,
.gform_wrapper .gfield_date_month input,
.gform_wrapper .gfield_date_day input,
.gform_wrapper .gfield_date_year input {
    width: 70% !important;
}

.gform_wrapper .gfield_date_month,
.gform_wrapper .gfield_date_day,
.gform_wrapper .gfield_date_year {
    width: 50px;
    float: left;
}

.gform_wrapper .gfield_date_month input,
.gform_wrapper .gfield_date_day input,
.gform_wrapper .gfield_date_year input {
    width: 85% !important;
}

.gform_wrapper .gfield_time_hour input[type=text], 
.gform_wrapper .gfield_time_minute input[type=text],
.gform_wrapper .gfield_time_ampm select {
    outline-style: none;
    font-size: 11px;
    font-family: inherit;
    padding: 5px 2px 5px 2px;
    letter-spacing: normal;
}

.gform_wrapper .gfield_time_hour label,
.gform_wrapper .gfield_time_minute label,
.gform_wrapper .gfield_date_month label,
.gform_wrapper .gfield_date_day label,
.gform_wrapper .gfield_date_year label{
    display: block;
    margin: 3px 0;
    font-size: 11px;
    letter-spacing: 0.5pt;
}

<?php } // end if statement

    if ( $simpleAddOn->is_address_active() ) { ?>

.gform_wrapper .gcc-address label {
    display: block;
    margin: 3px 0;
    font-size: 11px;
    letter-spacing: 0.5pt;
}


<?php } ?>
