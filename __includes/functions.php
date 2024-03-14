<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

function __($text, $domain='default')
{
	
	// language
	$lang = defined('CURRENT_LANG') ? CURRENT_LANG : 'en';

	// current text domain
	$current_textdomain = 'default';
	
	if( !empty($textdomain) ){

		\putenv("LC_ALL=$lang");
		\setlocale(LC_ALL, $lang);

		// Specify the location of the translation files
		\bindtextdomain($textdomain, ABSPATH.DIRECTORY_SEPARATOR."locale");
		\textdomain($textdomain);
		
		// translated text
		$translated_text = \gettext($text);

		// reset to default
		\putenv("LC_ALL=$lang");
		\setlocale(LC_ALL, $lang);

		// Specify the location of the translation files
		\bindtextdomain($current_textdomain, ABSPATH.DIRECTORY_SEPARATOR."locale");
		\textdomain($current_textdomain);

		return $translated_text;

	}
	
	\putenv("LC_ALL=$lang");
	\setlocale(LC_ALL, $lang);

	// Specify the location of the translation files
	\bindtextdomain($current_textdomain, ABSPATH.DIRECTORY_SEPARATOR."locale");
	\textdomain($current_textdomain);

	return \gettext($text);

}


function _e($text, $domain='default')
{
	echo _($text, $domain);
}


function esc_attr($text)
{
	return str_replace(array('"', '\''), array('&;',''), $text);
}


function esc_html($text)
{
	return str_replace(array('<', '>'), array('&lt;', '&gt;'), $text);
}


function esc_attr__($text, $domain='default')
{
	return esc_attr( __($text, $domain) );
}


function esc_html__($text, $domain='default')
{
	return esc_html( __($text, $domain) );
}


function esc_attr_e($text, $domain='default')
{
	echo esc_attr( __($text, $domain) );
}


function esc_html_e($text, $domain='default')
{
	echo esc_html( __($text, $domain) );
}

function wp_doing_ajax(){
	return isset($_REQUEST['action']) && !empty($_REQUEST['action']);
}

?>