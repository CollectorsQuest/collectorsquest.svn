<?php
require( dirname(__FILE__) . '/../../../wp-load.php' );
require_once(dirname(__FILE__) . '/git/include_lib.inc');
$git_action = isset($_GET['git_action'])?$_GET['git_action']:$_POST['git_action'];
switch ($git_action) {
	case 'git_callback':
		git_callback();
		break;
	case 'git_userstat':
		git_userstat();
		break;
	case 'git_login':
		git_login();
		break;
	case 'git_home':
		git_home();
		break;
	case 'git_logout':
		git_logout();
		break;
}


function git_callback(){
	session_start();
	$inputEmail = isset($_GET['rp_input_email']) ? $_GET['rp_input_email'] : '';
	$purpose 	= isset($_GET['rp_purpose']) ? $_GET['rp_purpose'] : '';
	$url 		= gitUtil::getCurrentUrl();
	$url 		= str_replace('&amp;', '&', $url);
	$idpResponse = @file_get_contents('php://input');
	
	WPContextLoader::load();
	$handler = new gitCallbackHandler($inputEmail, $purpose, $url, $idpResponse);
	$handler->execute();
	
	
}

function git_home(){
	session_start();
	if (isset($_SESSION['customer_id'])){
		$secure_cookie = '';
	 
		$redirect_to = admin_url();
		$reauth = empty($_REQUEST['reauth']) ? false : true;
		if ( !$secure_cookie && is_ssl() && force_ssl_login() && !force_ssl_admin() && ( 0 !== strpos($redirect_to, 'https') ) && ( 0 === strpos($redirect_to, 'http') ) )
			$secure_cookie = false;
	
		$user = new WP_User($_SESSION['customer_id']);
		
		global $auth_secure_cookie;
		wp_set_auth_cookie($user->ID, false, $secure_cookie);
		
		wp_redirect($redirect_to);
	}
}

/**
 * 取得用户的状态
 */
function git_userstat(){
	$target = isset($_POST['rp_target']) ? $_POST['rp_target'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	$handler = new gitLoginHandler($target, $email, $password);
	return $handler->execute();
}

function git_logout(){
	$redirect_to = WP_CONTENT_DIR;
	check_admin_referer('log-out');
	wp_logout();

	wp_safe_redirect( $redirect_to );
	exit();
}

/**
 * 使用goolge identity toolkit登录
 */
function git_login(){
	$target = isset($_POST['rp_target']) ? $_POST['rp_target'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	 
	$handler = new gitLoginHandler($target, $email, $password);
	return $handler->execute();
}



?>