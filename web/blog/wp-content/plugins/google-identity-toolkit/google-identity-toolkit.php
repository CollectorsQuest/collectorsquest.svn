<?php
/*
Plugin Name:Google Itentity Toolkit
Version: 1.0
Plugin URI: [url]http://code.google.com/intl/zh-CN/apis/identitytoolkit/index.html[/url]
Author: google - google.com
Author URI: [url]http://www.google.com[/url]
Description: Google Identity Toolkit (GITkit) is a free toolkit for website operators who currently allow users to login with their email address and password, and would like to replace that password with federated login. .
*/

define('GIT_VERSION', '1.0');
define('GIT_PLUGIN_URL', plugin_dir_url( __FILE__ ));
require_once(dirname(__FILE__) . '/git/include_lib.inc');
error_reporting(0);
session_start();

if ( !function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	exit;
}

function activate_git() {
	global $wpdb;
	add_option('git_apikey', '');
	add_option('git_code', '');
	add_option('git_close_original', '');
	add_option('git_select_lang', '');

	$wpdb->query("ALTER TABLE $wpdb->users ADD (type int(1) NOT NULL DEFAULT '0')");
}

function deactive_git() {
	global $wpdb;
	delete_option('git_apikey');
	delete_option('git_code');
	delete_option('git_close_original');
	delete_option('git_select_lang');

	$wpdb->query("ALTER TABLE $wpdb->users drop type");
}

function git_admin_ini() {
  register_setting('git', 'git_apikey');
  register_setting('git', 'git_code');
  register_setting('git', 'git_close_original');
  register_setting('git', 'git_select_lang');
}


function git_add_options_page(){
	add_options_page('Google Identity Toolkit ','Google Identity Toolkit',8,'google-identity-toolkit.php','showsettingpage');
}

function showsettingpage(){
	include(dirname(__FILE__))."/git_setting.php";
}

function google_identity_tookit_js()
{
  global $git_data;

	$git_code = get_option("git_code");
	$git_select_lang 	= get_option("git_select_lang");

	if ($git_select_lang == '__auto__'){
		$browser_lang = get_agent_language();
		$git_code_array = split("\n", $git_code);
		$git_code_array[5] = 'google.load("identitytoolkit", "1", {packages: ["ac"], language: "'.$browser_lang.'"});';
		$git_code = join("\n", $git_code_array);
	}
	echo $git_code;

	// echo  get_option("git_code");
	$json_git_data = json_encode($git_data);
	$close_original = get_option('git_close_original');

	$account_chooser_js = <<<JS
		<script type="text/javascript">
		var accountChooser = jQuery("#account-chooser");
		if (accountChooser.size() == 0){
			var headerIsBody = false;
			header = jQuery("#header");
			if (header.size() == 0){
				header = jQuery("#page");
				if (header.size() == 0){
					header = jQuery("body");
					headerIsBody = true;
				}
			}
			// var header = jQuery("#header");
			if (!headerIsBody){
				header.css({"position": "relative"});
			}
			header.prepend("<div id='account-chooser' style='position: absolute; z-index:99; float:right; right:6px; top:6px;'></div>");
			jQuery('#account-chooser').accountChooser();
		}
		(function(){
			var close_original = "$close_original";
			if (close_original == 1){
				var meta = jQuery("#meta");
				meta.find("a").each(function(){
					var _this = jQuery(this);
					var href = _this.attr("href");
					if (href.indexOf('\/wp-login.php') > -1){
						_this.parent().empty().remove();
					}
				});
				if ( meta.find("li").size() == 0){
					meta.hide();
				}
			}
		})();
		</script>
JS;
	echo $account_chooser_js;
}

function git_plugin_action_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/google-identity-toolkit.php' ) ) {
		$links[] = '<a href="options-general.php?page=google-identity-toolkit.php">'.__('Settings').'</a>';
	}

	return $links;
}

function show_git_admin_header(){
	$current_user = wp_get_current_user();

	$git_data = array();
	$git_data['signedIn'] 	= true;
	$git_data['email'] 		= $current_user->user_email;
	$git_data['displayName']= isset($current_user->display_name) ? $current_user->display_name: $current_user->user_nicename;
	$git_data['legacy'] 	= true;
	$json_git_data = json_encode($git_data);

	$profile = "<a href='profile.php' title='" . esc_attr__('Edit your profile') . '\'>' . __('Your Profile') . '</a>';

	$git_code 			= get_option("git_code");
	$git_select_lang 	= get_option("git_select_lang");


	if (!empty($git_code)){
		if ($git_select_lang == '__auto__'){
			$browser_lang = get_agent_language();
			$git_code_array = split("\n", $git_code);
			$git_code_array[5] = 'google.load("identitytoolkit", "1", {packages: ["ac"], language: "'.$browser_lang.'"});';
			$git_code = join("\n", $git_code_array);
		}
		echo  $git_code;
	$account_chooser_js = <<<JS
		<script type="text/javascript">
		jQuery(function(){
			jQuery("#wphead").css({"height":"36px"});
			var userInfoEl = jQuery('#wphead-info');
			userInfoEl.html('').append("<div id='git_head' ></div>");
			jQuery('#git_head').append("<div id='git_login' style='position:relative; z-index:49;float:right;margin-top:3px;'></div><div style='position:relative; z-index:49;float:right;margin-top:3px;height:22px; line-height:22px; padding:4px; padding-right:6px;'>$profile</div>");
			jQuery("#git_login").accountChooser($json_git_data);
		});
		</script>
JS;
	echo $account_chooser_js;
	}
}


function get_agent_language(){
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);

	$languageList = array(
		"zh-c"=>"zh-CN",
		"zh"=>"zh-TW",
		"en"=>"en",
		"fr"=>"fr",
		"it"=>"it",
		"de"=>"de",
		"es"=>"es",
		"ja"=>"ja",
		"ko"=>"ko"
	);

	foreach ($languageList as $lang_key=>$language){
		if (preg_match("/$lang_key/i", $lang)){
			return $language;
		}
	}

	return 	$languageList["en"];
}

function git_login_form_register(){
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		return;
	}

	if (!empty($_GET['email'])){
		$domain = gitUtil::getEmailDomain($_GET['email']);
		$isFederated = gitUtil::isFederatedDomain($domain);
		if (!$isFederated){
			$_SESSION['idpAssertion'] = NULL;
		}
	}

	$js = '';
	if (!empty($_SESSION['idpAssertion'])){
		WPContextLoader::load();
		$sessionManager = gitContext::getSessionManager();
		$idpAssertion = $sessionManager->getAssertion();
		$validatedEmail = NULL;
		$is_federated = FALSE;

		$register_name 	= '';
		$register_email = '';
		if ($idpAssertion != NULL) {
			$validatedEmail = $idpAssertion->getVerifiedEmail();

			if (!empty($validatedEmail) ) {
				$is_federated = TRUE;
				$_SESSION['git_register_email'] = $idpAssertion->getVerifiedEmail();
				$git_name 						= $idpAssertion->getDisplayName();
				if (empty($git_name)){
					list($truename, $domain) = explode("@", $_SESSION['git_register_email']);
					$git_name = $truename;
				}

				$_SESSION['name'] = $git_name;
				$register_name 	= $_SESSION['name'];
				$register_email = $_SESSION['git_register_email'];
				$js = <<<JS
	<script type='text/javascript'>
	window.onload = function(){
		document.getElementById("reg_passmail").style.display = "none";
		var theForm = document.registerform;
		var user_login = theForm.user_login;
		var user_email = theForm.user_email;
		user_login.value = "{$register_name}";
		user_email.value = "{$register_email}";

		var emailSpan = document.createElement("h3");
		emailSpan.innerHTML = user_email.value;
		emailSpan.style.height = "35px";
		emailSpan.style.lineHeight = "35px";

		user_email.style.display = "none";
		user_email.parentNode.appendChild(emailSpan);
	}
	</script>
JS;
			}
		}
	} else {
		if (isset($_GET['email'])){
			list($truename, $domain) = explode("@", $_GET['email']);
			$register_name 	= $truename;
			$register_email = $_GET['email'];
			$js = <<<JS
	<script type='text/javascript'>
	window.onload = function(){
		document.getElementById("reg_passmail").style.display = "none";
		var theForm = document.registerform;
		var user_login = theForm.user_login;
		var user_email = theForm.user_email;
		user_login.value = "{$register_name}";
		user_email.value = "{$register_email}";
	}
	</script>
JS;
		}
	}

	if (isset($js)){
		echo $js;
	}
}


function git_register_post($sanitized_user_login, $user_email, $errors){
	if (username_exists( $sanitized_user_login )){
		// $errors->add( 'username_exists', __( '<strong>ERROR</strong>: This username is already registered, please choose another one.' ) );
		return;
	}

	$user_pass = wp_generate_password( 12, false);
	$user_id = wp_create_user( $sanitized_user_login, $user_pass, $user_email );
	if ( ! $user_id ) {
		$errors->add( 'registerfail', sprintf( __( '<strong>ERROR</strong>: Couldn&#8217;t register you... please contact the <a href="mailto:%s">webmaster</a> !' ), get_option( 'admin_email' ) ) );
		return $errors;
	}
	update_user_option( $user_id, 'default_password_nag', true, true );
	$_SESSION['idpAssertion'] = null;
	$_SESSION['git_register_email'] = '';
	$_SESSION['name'] = '';

	$_SESSION['customer_id'] = $user_id;

	$account = new WPAccountService();
	$account->toFederated($user_email);

	$redirect_to = 	GIT_PLUGIN_URL."/git_client.php?git_action=git_home";
	wp_redirect($redirect_to);

	exit;
}

function git_login_init(){
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		return;
	}
	if (isset($_GET['action']) && $_GET['action']=='logout'){
		return;
	}
	$git_code = get_option("git_code");
	echo $git_code;
	echo <<<HTML
<script type="text/javascript">
	$(function()
	{
	  // $("#loginform").html('').append('<div id="git_login_box" style="position:relative; left:-85px; top:-6px; margin:0px auto;"></div>');
		$("#loginform").append('<br/><br/><br/><hr/><br/><div id="git_login_box" style="position:relative; left:-85px; top:-6px; margin:0px auto;"></div>');
		$("#git_login_box").accountChooser();
	});
</script>
HTML;
}

function show_user_profile(){
	$current_user = wp_get_current_user();

	if ($current_user->type == 1){
		echo <<<JS
		<script type="text/javascript">
			(function(){
				var currentEmail = 	jQuery("#email");
				currentEmail.hide().after(currentEmail.val());
			})();
		</script>
JS;
	}

}

function git_allow_password_reset(){
	global $wpdb;
	$email 			= $_GET['user_login']?$_GET['user_login']:$_POST['user_login'];
	$cache = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE user_email='$email'");
	if ($cache->type == 1){
		return false;
	}

	return true;
}

function git_retrieve_password_message($message, $key){
	global $wpdb;
	$email 			= $_GET['user_login']?$_GET['user_login']:$_POST['user_login'];
	$cache = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE user_email='$email'");
	if ($cache->type == 1){
		$message = "There is no need to retrieve your password, because you can use this email to do the federated login.";
	}

	return $message;
}

function git_show_password_fields($profileuser){
	global $wpdb;

	if (!empty($_SESSION['customer_id'])){
		$customer_id = $_SESSION['customer_id'];
		$cache = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID='$customer_id'");
		if ($cache->type == 1){
			return false;
		}
	}

	return true;
}

register_activation_hook(__FILE__, 'activate_git');
register_deactivation_hook(__FILE__, 'deactive_git');

if (is_admin()){
	add_action('admin_menu', 'git_add_options_page');
	add_action('admin_init', 'git_admin_ini');
	add_filter('plugin_action_links', 'git_plugin_action_links', 10, 2 );
	add_action('show_user_profile', 'show_user_profile');
	add_action('show_password_fields', 'git_show_password_fields');

}

if (!is_admin()) {
	add_action('wp_footer', 'google_identity_tookit_js');
	add_action("login_form_register", 'git_login_form_register');
}

add_action('in_admin_header', 'show_git_admin_header');
if (isset($_SESSION['idpAssertion'])){
	add_action('register_post', 'git_register_post', 10, 3);
}

add_action('login_init', 'git_login_init');
// add_filter('allow_password_reset', 'git_allow_password_reset');
add_action('retrieve_password_message', 'git_retrieve_password_message');


?>
