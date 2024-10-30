<?php
/*
Plugin Name: Just Test Email
Description: Just test's e-mail after activations.
Author: Bart Bury
Version: 1.0.1
*/

register_activation_hook(__FILE__, static function (): void {
    $to = get_bloginfo('admin_email');
	$subject = 'Success email test 1.0.1';
	$body = 'The email body content';
	$headers = array('Content-Type: text/html; charset=UTF-8');

	wp_mail( $to, $subject, $body, $headers );
});