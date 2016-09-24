<?php
/*
 Plugin Name: W3TC deny support page
 Plugin URI: #
 Description: The W3TC support page has a vulnerability. This plugin denies access to ALL users to the W3TC support page, gives you time to change plugins.
 Author: Ramon Fincken MijnPress.nl ManagedWPHosting.nl
 Version: 1.0
 Author URI: https://www.mijnpress.nl
 */

function mp_get__logo() {
	return '<img style="float:left; margin-right: 10px;" src="https://www.managedwphosting.nl/static/logo/xxs.png" title="Logo ManagedWPHosting.nl">';
}

/* ---------------------------------------------------------------------------------  */
/**
* Deny support page
*/
if(isset($_GET['page']) && $_GET['page'] == 'w3tc_support') {
	$title= 'W3 totalcache vulnerability';
	$logo = '';
	if(function_exists('mp_get_logo')) {
		$logo = mp_get__logo();
	}
	wp_die( '<h1>'.$title. '</h1><p>'.$logo. 'We have disabled access to this page</p>', $title);
}
/**
* /Deny support page
*/
/* ---------------------------------------------------------------------------------  */
?>
