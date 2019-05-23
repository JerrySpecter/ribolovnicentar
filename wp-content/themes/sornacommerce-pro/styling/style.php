<?php 
//defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
header("Content-type: text/css");
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $absolute_path[0] . 'wp-load.php';
require_once($wp_load);


require_once(get_template_directory() . '/styling/global.php');
require_once(get_template_directory() . '/styling/menu.php');
require_once(get_template_directory() . '/styling/fonts.php');
