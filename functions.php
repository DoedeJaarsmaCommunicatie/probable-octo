<?php
require_once get_stylesheet_directory() . '/vendor/aristath/kirki/kirki.php';
require_once get_stylesheet_directory() . '/vendor/autoload.php';

$updates = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/DoedeJaarsmaCommunicatie/probable-octo',
	__FILE__,
	'tetterode'
);

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
