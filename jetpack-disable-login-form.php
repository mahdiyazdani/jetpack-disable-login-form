<?php
/*
Plugin Name: 	Jetpack Disable Login Form
Plugin URI:  	https://www.mypreview.one
Description:	Completely disable and hide the default WordPress login form, and force users to log in via WordPress.com only!
Version:     	1.0.0
Author:      	Mahdi Yazdani
Author URI:  	https://www.mypreview.one
Text Domain: 	jetpack-disable-login-form
Domain Path: 	/languages
License:     	GPL2
License URI: 	https://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter( 'jetpack_remove_login_form', '__return_true' );