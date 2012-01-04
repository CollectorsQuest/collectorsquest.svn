<?php

/**
 * Include the Social Library
 **/
function oa_social_login_add_javascripts ()
{
	if (!wp_script_is ('oa_social_library', 'registered'))
	{
		//Read settings
		$settings = get_option ('oa_social_login_settings');

		if (!empty ($settings ['api_subdomain']))
		{
			wp_register_script ("oa_social_library", (is_ssl () ? 'https' : 'http') . '://' . $settings ['api_subdomain'] . '.api.oneall.com/socialize/library.js');
		}
	}
	wp_print_scripts ("oa_social_library");
}
add_action ('login_head', 'oa_social_login_add_javascripts');
add_action ('wp_head', 'oa_social_login_add_javascripts');


/**
 * Setup Shortcode handler
 **/
function oa_social_login_shortcode_handler ($args)
{
	if (!is_user_logged_in ())
	{
		oa_social_login_render_login_form ('shortcode');
	}
}
add_shortcode ('oa_social_login', 'oa_social_login_shortcode_handler');

/**
 * Display custom avatars
 */
function oa_social_login_custom_avatar ()
{
	global $comment;
	$args = func_get_args ();

	//Check if we are in a comment
	if (!is_null ($comment) AND !empty ($comment->user_id) AND !empty ($args [0]))
	{
		//Read settings
		$settings = get_option ('oa_social_login_settings');
		if (isset ($settings ['plugin_show_avatars_in_comments']) AND $settings ['plugin_show_avatars_in_comments'] == '1')
		{
			//Read Thumbnail
			if (($user_thumbnail = get_user_meta ($comment->user_id, 'oa_social_login_user_thumbnail', true)) !== false)
			{
				if (strlen (trim ($user_thumbnail)) > 0)
				{
					$user_thumbnail = preg_replace ('#src=([\'"])([^\\1]+)\\1#Ui', "src=\\1" . $user_thumbnail . "\\1", $args [0]);
					$user_thumbnail = preg_replace ('#height=([\'"])([^\\1]+)\\1#Ui', "", $user_thumbnail);
					$user_thumbnail = preg_replace ('#width=([\'"])([^\\1]+)\\1#Ui', "", $user_thumbnail);
					return $user_thumbnail;
				}
			}
		}
	}
	return $args [0];
}
add_filter ('get_avatar', 'oa_social_login_custom_avatar');


/**
 * Display the provider grid for comments
 */
function oa_social_login_render_login_form_comments ()
{
	if (comments_open () && !is_user_logged_in ())
	{
		oa_social_login_render_login_form ('comments');
	}
}
add_action ('comment_form_top', 'oa_social_login_render_login_form_comments');


/**
 * Display the provider grid for registration
 */
function oa_social_login_render_login_form_registration ()
{
	//Users may register
	if (get_option ('users_can_register') === '1')
	{
		//Read settings
		$settings = get_option ('oa_social_login_settings');

		//Display buttons if option not set or enabled
		if (!isset ($settings ['plugin_display_in_registration_form']) OR $settings ['plugin_display_in_registration_form'] == '1')
		{
			oa_social_login_render_login_form ('registration');
		}
	}
}
add_action ('register_form', 'oa_social_login_render_login_form_registration');


/**
 * Display the provider grid for login
 */
function oa_social_login_render_login_form_login ()
{
	//Read settings
	$settings = get_option ('oa_social_login_settings');

	//Display buttons if option not set or enabled
	if (!isset ($settings ['plugin_display_in_login_form']) OR $settings ['plugin_display_in_login_form'] == '1')
	{
		oa_social_login_render_login_form ('login');
	}
}
add_action ('login_form', 'oa_social_login_render_login_form_login');


/**
 * Display a custom grid for login
 */
function oa_social_login_render_custom_form_login ()
{
	if (!is_user_logged_in ())
	{
		oa_social_login_render_login_form ('custom');
	}
}
add_action ('oa_social_login', 'oa_social_login_render_custom_form_login');


/**
 * Display the provider grid
 */
function oa_social_login_render_login_form ($source)
{
	//Import providers
	GLOBAL $oa_social_login_providers;

	//Read settings
	$settings = get_option ('oa_social_login_settings');

	//API Subdomain
	$api_subdomain = (!empty ($settings ['api_subdomain']) ? $settings ['api_subdomain'] : '');

	//API Subdomain Required
	if (!empty ($api_subdomain))
	{
		//Caption
		$plugin_caption = (!empty ($settings ['plugin_caption']) ? $settings ['plugin_caption'] : '');

		//Build providers
		$providers = array ();
		if (is_array ($settings ['providers']))
		{
			foreach ($settings ['providers'] AS $settings_provider_key => $settings_provider_name)
			{
				if (isset ($oa_social_login_providers [$settings_provider_key]))
				{
					$providers [] = $settings_provider_key;
				}
			}
		}

		//Widget
		if ($source == 'widget')
		{
			$css_theme_uri = 'http://oneallcdn.com/css/api/socialize/themes/wp_widget.css';
			$show_title = false;
		}
		//Inline
		else
		{
			//For all page, except the Widget
			$css_theme_uri = 'http://oneallcdn.com/css/api/socialize/themes/wp_inline.css';
			$show_title = (empty ($plugin_caption) ? false : true);

			//Anchor to comments
			if ($source == 'comments')
			{
				$source .= '#comments';
			}
		}

		//Providers selected?
		if (count ($providers) > 0)
		{
			//Random integer
			$rand = mt_rand (99999, 9999999);
?>
				<div class="oneall_social_login">
					<?php
								if ($show_title)
								{
					?>
								<div style="margin-bottom: 3px;"><label><?php _e ($plugin_caption, 'oa_social_login'); ?></label></div>
							<?php
										}
							?>
					<div class="oneall_social_login_providers" id="oneall_social_login_providers_<?php echo $rand; ?>"></div>
					<script type="text/javascript">
					 oneall.api.plugins.social_login.build("oneall_social_login_providers_<?php echo $rand; ?>", {
					  'providers' :  ['<?php echo implode ("','", $providers); ?>'],
					  'callback_uri': (window.location.href + ((window.location.href.split('?')[1] ? '&':'?') + 'oa_social_login_source=<?php echo $source; ?>')),
					  'css_theme_uri' : '<?php echo $css_theme_uri; ?>'
					 });
					</script>
				</div>
			<?php
					}
				}
			}
