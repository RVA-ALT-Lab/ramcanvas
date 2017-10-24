<?php
wp_head();

$args = array(
	'echo'           => true,
	'remember'       => true,
	'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . '/app',
	'form_id'        => 'loginform',
	'id_username'    => 'user_login',
	'id_password'    => 'user_pass',
	'id_remember'    => 'rememberme',
	'id_submit'      => 'wp-submit',
	'label_username' => __( 'Username or Email Address' ),
	'label_password' => __( 'Password' ),
	'label_remember' => __( 'Remember Me' ),
	'label_log_in'   => __( 'Log In' ),
	'value_username' => '',
	'value_remember' => false
);

wp_login_form($args);

wp_footer();
?>