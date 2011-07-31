<?php
/*
Plugin Name: KoprolWP
Description: Koprol Plugin for Wordpress
Version: 0.0.1
Author: Komando Team
*/

function koprolwp_share_display(){
	$image = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__))."images/koprol.png";
	$link = sprintf("<a rel='nofollow' title='Click to share on Koprol' href='#'><img id='koprolwp-button' src='%s' /></a>",esc_url($image));
	return $link;
}



wp_enqueue_style( 'koprolwp', plugin_dir_url( __FILE__ ) .'styles/koprolwp.css' );
add_filter( 'the_content', 'koprolwp_share_display');

