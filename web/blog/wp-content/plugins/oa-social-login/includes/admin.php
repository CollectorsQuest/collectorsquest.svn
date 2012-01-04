<?php

/**
 * Add Settings Tab
 **/
function oa_social_login_admin_menu ()
{
	$page = add_options_page ('Social Login', 'Social Login', 'manage_options', 'oa_social_login', 'oa_display_social_login_settings');
	add_action ('admin_print_styles-' . $page, 'oa_social_login_admin_css');
	add_action ('admin_enqueue_scripts', 'oa_social_login_admin_js');
	add_action ('admin_init', 'oa_register_social_login_settings');
	add_action ('admin_notices', 'oa_social_login_admin_message');
}
add_action ('admin_menu', 'oa_social_login_admin_menu');


/**
 * Add an activation message to be displayed once
 */
function oa_social_login_admin_message ()
{
	if (get_option ('oa_social_login_activation_message') !== '1')
	{
		echo '<div class="updated"><p><strong>Thank you for using the Social Login Plugin!</strong> Please go to the <strong>Settings\Social Login</strong> page to setup the plugin.</p></div>';
		update_option ('oa_social_login_activation_message', '1');
	}
}


/**
 * Check API Settings trough an Ajax Call
 */
function oa_social_login_check_api_settings ()
{
	check_ajax_referer ('oa_social_login_ajax_nonce');

	//Check if all fields have been filled out
	if (empty ($_POST ['api_subdomain']) OR empty ($_POST ['api_key']) OR empty ($_POST ['api_secret']))
	{
		echo 'error_not_all_fields_filled_out';
		delete_option ('oa_social_login_api_settings_verified');
		die ();
	}

	//Subdomain
	$api_subdomain = trim (strtolower ($_POST ['api_subdomain']));

	//Full domain entered
	if (preg_match ("/([a-z0-9\-]+)\.api\.oneall\.com/i", $api_subdomain, $matches))
	{
		$api_subdomain = $matches [1];
	}

	//Check subdomain format
	if (!preg_match ("/^[a-z0-9\-]+$/i", $api_subdomain))
	{
		echo 'error_subdomain_wrong_syntax';
		delete_option ('oa_social_login_api_settings_verified');
		die ();
	}

	//Domain
	$api_domain = $api_subdomain . '.api.oneall.com';

	//Key
	$api_key = $_POST ['api_key'];

	//Secret
	$api_secret = $_POST ['api_secret'];

	//Ping
	$curl = curl_init ();
	curl_setopt ($curl, CURLOPT_URL, 'https://' . $api_domain . '/tools/ping.json');
	curl_setopt ($curl, CURLOPT_HEADER, 0);
	curl_setopt ($curl, CURLOPT_USERPWD, $api_key . ":" . $api_secret);
	curl_setopt ($curl, CURLOPT_TIMEOUT, 15);
	curl_setopt ($curl, CURLOPT_VERBOSE, 0);
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt ($curl, CURLOPT_FAILONERROR, 0);

	if (($json = curl_exec ($curl)) === false)
	{
		curl_close ($curl);

		echo 'error_communication';
		delete_option ('oa_social_login_api_settings_verified');
		die ();
	}

	//Success
	$http_code = curl_getinfo ($curl, CURLINFO_HTTP_CODE);
	curl_close ($curl);

	//Authentication Error
	if ($http_code == 401)
	{
		echo 'error_authentication_credentials_wrong';
		delete_option ('oa_social_login_api_settings_verified');
		die ();
	}
	elseif ($http_code == 404)
	{
		echo 'error_subdomain_wrong';
		delete_option ('oa_social_login_api_settings_verified');
		die ();
	}
	elseif ($http_code == 200)
	{
		echo 'success';
		update_option ('oa_social_login_api_settings_verified', '1');
		die ();
	}
}
add_action ('wp_ajax_check_api_settings', 'oa_social_login_check_api_settings');


/**
 * Add Settings JS
 **/
function oa_social_login_admin_js ($hook)
{
	if ($hook == 'settings_page_oa_social_login')
	{
		if (!wp_script_is ('oa_social_login_admin_js', 'registered'))
		{
			wp_register_script ('oa_social_login_admin_js', OA_SOCIAL_LOGIN_PLUGIN_URL . "/assets/js/admin.js");
		}

		wp_enqueue_script ('oa_social_login_admin_js');
		wp_enqueue_script ('jquery');

		$oa_social_login_ajax_nonce = wp_create_nonce ('oa_social_login_ajax_nonce');
		wp_localize_script ('oa_social_login_admin_js', 'oa_social_login_ajax_nonce', array (
			'value' => $oa_social_login_ajax_nonce
		));
	}
}

/**
 * Add Settings CSS
 **/
function oa_social_login_admin_css ($hook)
{
	if (!wp_style_is ('oa_social_login_admin_css', 'registered'))
	{
		wp_register_style ('oa_social_login_admin_css', OA_SOCIAL_LOGIN_PLUGIN_URL . "/assets/css/admin.css");
	}

	if (did_action ('wp_print_styles'))
	{
		wp_print_styles ('oa_social_login_admin_css');
	}
	else
	{
		wp_enqueue_style ('oa_social_login_admin_css');
	}
}


/**
 * Register plugin settings and their sanitization callback
 */
function oa_register_social_login_settings ()
{
	register_setting ('oa_social_login_settings_group', 'oa_social_login_settings', 'oa_social_login_settings_validate');
}


/**
 *  Plugin settings sanitization callback
 */
function oa_social_login_settings_validate ($settings)
{
	//Import providers
	GLOBAL $oa_social_login_providers;

	//Sanitzed Settings
	$sanitzed_settings = array ();

	//Base Settings
	foreach (array (
		'api_subdomain',
		'api_key',
		'api_secret',
		'plugin_caption',
		'plugin_link_verified_accounts',
		'plugin_show_avatars_in_comments',
		'plugin_display_in_login_form',
		'plugin_login_form_redirect',
		'plugin_login_form_redirect_custom_url',
		'plugin_display_in_registration_form',
		'plugin_registration_form_redirect',
		'plugin_registration_form_redirect_custom_url'
	) AS $key)
	{
		if (isset ($settings [$key]))
		{
			$sanitzed_settings [$key] = trim ($settings [$key]);
		}
	}

	//Subdomain is always lowercase
	if (isset ($sanitzed_settings ['api_subdomain']))
	{
		$api_subdomain = strtolower ($sanitzed_settings ['api_subdomain']);

		//Full domain entered
		if (preg_match ("/([a-z0-9\-]+)\.api\.oneall\.com/i", $api_subdomain, $matches))
		{
			$api_subdomain = $matches [1];
		}

		$sanitzed_settings ['api_subdomain'] = $api_subdomain;
	}


	//Enabled providers
	if (isset ($settings ['providers']) AND is_array ($settings ['providers']))
	{
		foreach ($oa_social_login_providers AS $key => $name)
		{
			if (isset ($settings ['providers'] [$key]) AND $settings ['providers'] [$key] == '1')
			{
				$sanitzed_settings ['providers'] [$key] = 1;
			}
		}
	}


	//Flag settings
	$sanitzed_settings ['plugin_show_avatars_in_comments'] == ((isset ($sanitzed_settings ['plugin_show_avatars_in_comments']) AND $sanitzed_settings ['plugin_show_avatars_in_comments'] == '1') ? 1 : 0);
	$sanitzed_settings ['plugin_link_verified_accounts'] == ((isset ($sanitzed_settings ['plugin_link_verified_accounts']) AND $sanitzed_settings ['plugin_link_verified_accounts'] == '0') ? 0 : 1);
	$sanitzed_settings ['plugin_login_form_redirect'] = ((isset ($sanitzed_settings ['plugin_login_form_redirect']) AND in_array ($sanitzed_settings ['plugin_login_form_redirect'], array ('dashboard', 'homepage', 'custom'))) ? $sanitzed_settings ['plugin_login_form_redirect'] : 'homepage');
	$sanitzed_settings ['plugin_registration_form_redirect'] = ((isset ($sanitzed_settings ['plugin_registration_form_redirect']) AND in_array ($sanitzed_settings ['plugin_registration_form_redirect'], array ('dashboard', 'homepage', 'custom'))) ? $sanitzed_settings ['plugin_registration_form_redirect'] : 'dashboard');
	$sanitzed_settings ['plugin_display_in_login_form'] == ((isset ($sanitzed_settings ['plugin_display_in_login_form']) AND $sanitzed_settings ['plugin_display_in_login_form'] == '0') ? 0 : 1);

	//Check Login Redirection Settings
	if ($sanitzed_settings ['plugin_login_form_redirect'] == 'custom')
	{
		if (empty ($sanitzed_settings ['plugin_login_form_redirect_custom_url']))
		{
			$sanitzed_settings ['plugin_login_form_redirect'] = 'homepage';
		}
	}
	else
	{
		$sanitzed_settings ['plugin_login_form_redirect_custom_url'] = '';
	}


	//Check Registration Redirection Settings
	if ($sanitzed_settings ['plugin_registration_form_redirect'] == 'custom')
	{
		if (empty ($sanitzed_settings ['plugin_registration_form_redirect_custom_url']))
		{
			$sanitzed_settings ['plugin_registration_form_redirect'] = 'dashboard';
		}
	}
	else
	{
		$sanitzed_settings ['plugin_registration_form_redirect_custom_url'] = '';
	}

	//Done
	return $sanitzed_settings;
}


/**
 * Display Settings Page
 **/
function oa_display_social_login_settings ()
{
	//Import providers
	GLOBAL $oa_social_login_providers;
	?>
	<div class="wrap">
		<h2><?php _e ('Social Login Settings', 'oa_social_login'); ?></h2>
		<?php
			if (get_option ('oa_social_login_api_settings_verified') !== '1')
			{
				?>
					<div class="oa_container oa_container_welcome">
						<h3>
							Make your blog social!
						</h3>
						<div class="oa_container_body">
							<p>
								Allow your visitors to comment, login and register with social networks like Twitter, Facebook, LinkedIn, Hyves, Вконтакте, Google or Yahoo.
								<strong>Draw a larger audience and increase user engagement in a  few simple steps.</strong>
							</p>
							<p>
								To be able to use this plugin you first of all need to create a free account at <a href="https://app.oneall.com/signup/" target="_blank">http://www.oneall.com</a>
								and setup a Site. After having created your account and setup your Site, please enter the Site settings in the form below.
							</p>
							<h3>You are in good company, 10000+ websites already trust us!</h3>
							<p>
								<a class="button-secondary" href="https://app.oneall.com/signup/" target="_blank"><strong>Create your free account now!</strong></a>
							</p>
						</div>
					</div>
				<?php
			}
			else
			{
				?>
					<div class="oa_container oa_container_welcome">
						<h3>
							<?php _e ('Your API Account is setup correctly'); ?>
						</h3>
						<div class="oa_container_body">
							<p>
								<a href="https://app.oneall.com/signin/" target="_blank">Login to your account</a> to manage your providers and access your <a href="https://app.oneall.com/insights/"  target="_blank">Social Insights</a>.
								Determine which social networks are popular amongst your users and tailor your registration experience to increase your users' engagement.
							</p>
							<p>
								<a class="button-secondary" href="https://app.oneall.com/signin/" target="_blank"><strong>Signin to your account</strong></a>
							</p>
						</div>
					</div>
				<?php
			}
		?>
		<div class="oa_container oa_container_links">
			<h3>
				<?php _e ('Help, Updates &amp; Documentation'); ?>
			</h3>
			<ul>
				<li><a target="_blank" href="http://www.twitter.com/oneall">Follow us on Twitter</a> to stay informed about updates;</li>
				<li><a target="_blank" href="http://docs.oneall.com/plugins/guide/social-login-wordpress/">Read the online documentation</a> for more information about this plugin;</li>
				<li><a target="_blank" href="http://www.oneall.com/company/contact-us/">Contact us</a> if you have feedback or need assistance.</li>
			</ul>
		</div>
		<form method="post" action="options.php">
			<?php
				settings_fields ('oa_social_login_settings_group');
				$settings = get_option ('oa_social_login_settings');
				?>
			  <table class="form-table oa_form_table">
			  	<tr>
			  		<th class="head">
			  			<?php _e ('API Settings', 'oa_social_login'); ?>
			  		</th>
			  		<th class="head">
			  		<a href="https://app.oneall.com/applications/" target="_blank">Click here to create and view your API Credentials</a>
			  		</th>
			  	</tr>
					<tr>
		    	  <th scope="row">
		      		<label for="oneall_api_subdomain"><?php _e ('API Subdomain', 'oa_social_login'); ?>:</label>
		      	</th>
		      	<td>
		      		<input type="text" id="oa_social_login_settings_api_subdomain" name="oa_social_login_settings[api_subdomain]" size="60" value="<?php echo (isset ($settings ['api_subdomain']) ? htmlspecialchars ($settings ['api_subdomain']) : ''); ?>" />
		      	</td>
		      </tr>
					<tr>
						<th scope="row">
							<label for="oneall_api_public_key"><?php _e ('API Public Key', 'oa_social_login'); ?>:</label>
		      	</th>
						<td>
		      		<input type="text" id="oa_social_login_settings_api_key" name="oa_social_login_settings[api_key]" size="60" value="<?php echo (isset ($settings ['api_key']) ? htmlspecialchars ($settings ['api_key']) : ''); ?>" />
		      	</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="oneall_api_private_key"><?php _e ('API Private Key', 'oa_social_login'); ?>:</label>
						</th>
						<td>
							<input type="text" id="oa_social_login_settings_api_secret"  name="oa_social_login_settings[api_secret]" size="60" value="<?php echo (isset ($settings ['api_secret']) ? htmlspecialchars ($settings ['api_secret']) : ''); ?>" />
						</td>
					</tr>
					<tr class="foot">
						<td>
							<a class="button-secondary" id="oa_social_login_test_api_settings" href="#"><?php _e ('Verify API Settings', 'oa_social_login'); ?></a>
						</td>
						<td>
							<div id="oa_social_login_api_test_result"></div>
						</td>
					</tr>
				</table>
				<table class="form-table oa_form_table">
			  	<tr>
			  		<th class="head" colspan="2">
			  			<?php _e ('Enable the social networks/identity providers of your choice');?>
			  		</th>
			  	</tr>
			  	<?php
					  $i = 0;
					  foreach ($oa_social_login_providers AS $key => $provider_data)
					  {
				  		?>
				  			<tr class="<?php echo ((($i++) % 2) == 0) ? 'row_even' : 'row_odd' ?> row_provider">
					    	  <td class="row">
					    	  	<label for="oneall_social_login_provider_<?php echo $key; ?>"><span class="oa_provider oa_provider_<?php echo $key; ?>" title="<?php echo htmlspecialchars ($provider_data['name']); ?>"><?php echo htmlspecialchars ($provider_data['name']); ?></span></label>
					    	  	<input type="checkbox" id="oneall_social_login_provider_<?php echo $key; ?>" name="oa_social_login_settings[providers][<?php echo $key; ?>]" value="1"  <?php checked ('1', $settings ['providers'] [$key]); ?> />
					      		<label for="oneall_social_login_provider_<?php echo $key; ?>"><?php echo htmlspecialchars ($provider_data['name']); ?></label>
					      		<?php echo (isset($provider_data['note']) ? ('&nbsp;('.$provider_data['note'].')') : ''); ?>
					      	</td>
					      </tr>
			  			<?php
						 }
					 ?>
				</table>
				<table class="form-table oa_form_table oa_form_table_settings">
			  	<tr>
			  		<th class="head">
			  			<?php _e ('Basic Settings', 'oa_social_login'); ?>
			  		</th>
			  	</tr>
			  	<tr class="row_odd">
			  		<td>
			  			<?php _e ('Enter the caption to be displayed above the social network login buttons:', 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<input type="text"  name="oa_social_login_settings[plugin_caption]" size="118" value="<?php echo (isset ($settings ['plugin_caption']) ? htmlspecialchars ($settings ['plugin_caption']) : _e ('Connect with:')); ?>" />
						</td>
					</tr>
					<tr class="row_odd">
			  		<td>
			  			<?php _e ("If the user's social network profile has an avatar thumbnail, should we show it beside his comments?", 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<?php
								$plugin_show_avatars_in_comments = (isset ($settings ['plugin_show_avatars_in_comments']) AND $settings ['plugin_show_avatars_in_comments'] == '1');
							?>
							<input type="radio" name="oa_social_login_settings[plugin_show_avatars_in_comments]"  value="1" <?php echo ($plugin_show_avatars_in_comments ? 'checked="checked"' : ''); ?> /> <?php _e ('Yes, show user avatars from social networks if available'); ?><br />
							<input type="radio" name="oa_social_login_settings[plugin_show_avatars_in_comments]"  value="0" <?php echo (!$plugin_show_avatars_in_comments ? 'checked="checked"' : ''); ?> /> <?php _e ('No, display the default avatars'); ?> <strong>(<?php _e ('Default') ?>)</strong>
						</td>
					</tr>
				</table>
				<table class="form-table oa_form_table oa_form_table_settings">
					<tr>
			  		<th class="head">
			  			<?php _e ('Login Settings', 'oa_social_login'); ?>
			  		</th>
			  	</tr>
					<tr class="row_odd">
			  		<td>
			  			<?php _e ('Do you want to display the social network login buttons below the login form of your blog?', 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<?php
								$plugin_display_in_login_form = (!isset ($settings ['plugin_display_in_login_form']) OR $settings ['plugin_display_in_login_form'] == '1');
							?>
							<input type="radio" name="oa_social_login_settings[plugin_display_in_login_form]" value="1" <?php echo ($plugin_display_in_login_form ? 'checked="checked"' : ''); ?> /> <?php _e ('Yes, display the social network buttons below the login form'); ?> <strong>(<?php _e ('Default') ?>)</strong><br />
							<input type="radio" name="oa_social_login_settings[plugin_display_in_login_form]" value="0" <?php echo (!$plugin_display_in_login_form ? 'checked="checked"' : ''); ?> /> <?php _e ('No, disable social network buttons in the login form'); ?>
						</td>
					</tr>
					<tr class="row_odd">
			  		<td>
			  			<?php _e ('Where should existent users be redirected to after having logged in with their social network account?', 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<?php
								$plugin_login_form_redirect = ((!isset ($settings ['plugin_login_form_redirect']) OR !in_array ($settings ['plugin_login_form_redirect'], array (
									'dashboard',
									'homepage',
									'custom'
								))) ? 'homepage' : $settings ['plugin_login_form_redirect']);
							?>
							<input type="radio" name="oa_social_login_settings[plugin_login_form_redirect]" value="homepage" <?php echo ($plugin_login_form_redirect == 'homepage' ? 'checked="checked"' : ''); ?> /> <?php _e ('Redirect users to the homepage of my blog'); ?> <strong>(<?php _e ('Default') ?>)</strong><br />
							<input type="radio" name="oa_social_login_settings[plugin_login_form_redirect]" value="dashboard" <?php echo ($plugin_login_form_redirect == 'dashboard' ? 'checked="checked"' : ''); ?> /> <?php _e ('Redirect users to their account dashboard'); ?><br />
							<input type="radio" name="oa_social_login_settings[plugin_login_form_redirect]" value="custom" <?php echo ($plugin_login_form_redirect == 'custom' ? 'checked="checked"' : ''); ?> /> <?php _e ('Redirect users to the following url:'); ?><br />
							<input type="text"  name="oa_social_login_settings[plugin_login_form_redirect_custom_url]" size="118" value="<?php echo (isset ($settings ['plugin_login_form_redirect_custom_url']) ? htmlspecialchars ($settings ['plugin_login_form_redirect_custom_url']) : ''); ?>" />
						</td>
					</tr>
				</table>
				<table class="form-table oa_form_table oa_form_table_settings">
					<tr>
			  		<th class="head">
			  			<?php _e ('Registration Settings', 'oa_social_login'); ?>
			  		</th>
			  	</tr>
			  	<tr class="row_odd">
			  		<td>
			  			<?php _e ('If the email address of the social network profile is verified, should we try to link it to an existing account?', 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<?php
								$plugin_link_verified_accounts = (!isset ($settings ['plugin_link_verified_accounts']) OR $settings ['plugin_link_verified_accounts'] == '1');
							?>
							<input type="radio" name="oa_social_login_settings[plugin_link_verified_accounts]"  value="1" <?php echo ($plugin_link_verified_accounts ? 'checked="checked"' : ''); ?> /> <?php _e ('Yes, try to link verified social network profiles to existing blog accounts'); ?> <strong>(<?php _e ('Default') ?>)</strong><br />
							<input type="radio" name="oa_social_login_settings[plugin_link_verified_accounts]"  value="0" <?php echo (!$plugin_link_verified_accounts ? 'checked="checked"' : ''); ?> />  <?php _e ('No, disable account linking'); ?>
						</td>
					</tr>
					<tr class="row_odd">
			  		<td>
			  			<?php _e ('Do you want to display the social network login buttons below the registration form of your blog?', 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<?php
								$plugin_display_in_registration_form = (!isset ($settings ['plugin_display_in_registration_form']) OR $settings ['plugin_display_in_registration_form'] == '1');
							?>
							<input type="radio" name="oa_social_login_settings[plugin_display_in_registration_form]" value="1" <?php echo ($plugin_display_in_registration_form ? 'checked="checked"' : ''); ?> /> <?php _e ('Yes, display the social network buttons below the registration form'); ?> <strong>(<?php _e ('Default') ?>)</strong><br />
							<input type="radio" name="oa_social_login_settings[plugin_display_in_registration_form]" value="0" <?php echo (!$plugin_display_in_registration_form ? 'checked="checked"' : ''); ?> /> <?php _e ('No, disable social network buttons in the registration form'); ?>
						</td>
					</tr>

					<tr class="row_odd">
			  		<td>
			  			<?php _e ('Where should new users be redirected to after having registered with their social network account?', 'oa_social_login'); ?>
			  		</td>
			  	</tr>
					<tr class="row_even">
						<td>
							<?php
								$plugin_registration_form_redirect = ((!isset ($settings ['plugin_registration_form_redirect']) OR !in_array ($settings ['plugin_registration_form_redirect'], array (
									'dashboard',
									'homepage',
									'custom'
								))) ? 'dashboard' : $settings ['plugin_registration_form_redirect']);
							?>
							<input type="radio" name="oa_social_login_settings[plugin_registration_form_redirect]" value="homepage" <?php echo ($plugin_registration_form_redirect == 'homepage' ? 'checked="checked"' : ''); ?> /> <?php _e ('Redirect users to the homepage of my blog'); ?><br />
							<input type="radio" name="oa_social_login_settings[plugin_registration_form_redirect]" value="dashboard" <?php echo ($plugin_registration_form_redirect == 'dashboard' ? 'checked="checked"' : ''); ?> /> <?php _e ('Redirect users to their account dashboard'); ?> <strong>(<?php _e ('Default') ?>)</strong><br />
							<input type="radio" name="oa_social_login_settings[plugin_registration_form_redirect]" value="custom" <?php echo ($plugin_registration_form_redirect == 'custom' ? 'checked="checked"' : ''); ?> /> <?php _e ('Redirect users to the following url:'); ?><br />
							<input type="text"  name="oa_social_login_settings[plugin_registration_form_redirect_custom_url]" size="118" value="<?php echo (isset ($settings ['plugin_registration_form_redirect_custom_url']) ? htmlspecialchars ($settings ['plugin_registration_form_redirect_custom_url']) : ''); ?>" />
						</td>
					</tr>
				</table>
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e ('Save Changes') ?>" />
				</p>
			</form>
		</div>
	<?php
	}