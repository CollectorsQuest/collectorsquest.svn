=== Social Login ===
Contributors: ClaudeSchlesser
Tags: social login, social connect, facebook login, linkedin, livejournal, google, yahoo, twitter login, openid, paypal, vkontakte, hyves, widget, plugin, social network login, comments
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 1.6.1

Allow your visitors to comment and login with social networks like Twitter, Facebook, Paypal, LinkedIn, LiveJournal, OpenID, VKontakte, Google, Yahoo

== Description ==

The Social Login Plugin is a professional though free Wordpress plugin that allows your visitors to comment, 
login and register with social networks like Twitter, Facebook, LinkedIn, Paypal, LiveJournal, Hyves, Вконтакте, Google or Yahoo. <br />

<strong>Choose where to add the Social Login Plugin:</strong>
<ul>
 <li>On the comment formular</li>
 <li>On the login page</li>
 <li>On the registration page</li>
 <li>In your sidebar</li>
</ul>

<strong>Optionally add the Social Login widget:</strong>
<ul>
 	<li>A login widget that you can easily attach to your sidebar is provided</li>
 </ul>

<strong>Select the Social Networks/Providers:</strong>
<ul>
 <li>Facebook</li>
 <li>Twitter</li>
 <li>Google</li>
 <li>LinkedIn</li>
 <li>Paypal</li>
 <li>Yahoo</li>
 <li>OpenID</li>
 <li>LiveJournal</li>
 <li>Wordpress.com</li>
 <li>Hyves</li>
 <li>VKontakte (Вконтакте)</li>
 </ul>

<strong>Increase your wordpress user engagement in a few simple steps with this plugin.</strong><br />

The Social Login Plugin is maintained by <a href="http://www.oneall.com">OneAll</a>, a technology company offering a set of web-delivered
tools and services for establishing and optimizing a site's connection with social networks and identity providers such as Facebook, Twitter, 
Google, Yahoo!, LinkedIn, Paypal, Hyves amongst others.


== Installation ==

1. Upload the plugin folder to the "/wp-content/plugins/" directory of your WordPress site,
2. Activate the plugin through the 'Plugins' menu in WordPress,
3. Visit the "Settings\Social Login" administration page to setup the plugin. 

== Frequently Asked Questions ==

= Do I have to add template tags to my theme? =

You should not have to change your templates. 
The Social Login seamlessly integrates into your blog by using predefined hooks.


= I have a custom template and the plugin is not displayed correctly =

The plugin uses predefined hooks. If your theme does not support these hooks,
you can add the Social Login form manually to your theme by inserting the following code 
in your template (at the location where it should be displayed, i.e. above the comments).

`<?php do_action('oa_social_login'); ?>`

Do not hesitate to contact us if you need further assistance. 

= My users cannot login or leave comment with VKontakte (Вконтакте) =

Per default WordPress does not allow to use special characters in usernames.
If you encounter any problems with users having cyrillic characters in their
usernames, please consider installing the following plugin to fix the problem:
<a href="http://wordpress.org/extend/plugins/wordpress-special-characters-in-usernames/">Wordpress Special Characters In Usernames</a>

= Do I have to change my Rewrite Settings? =

The plugins does not rely on mod_rewrite and does not need any additional rules.
It should work out of the box.


= Where can I report bugs, leave my feedback and get support? =

Our team answers your questions at:<br />
http://www.oneall.com/company/contact-us/

The plugin documentation is available at:<br />
http://docs.oneall.com/plugins/guide/social-login-wordpress/

== Screenshots ==

1. **Comment** - Comment formular (Social Network Buttons are included)
2. **Login** - Login formular (Social Network Buttons are included)
3. **Plugin Settings** - Plugin Settings in the Wordpress Administration Area
4. **Widget Settings** - Widget Settings in the Wordpress Administration Area

== Changelog ==

= 1.0 =
* Initial release

= 1.0.1 =
* Hook oa_social_login fixed
* Plugin description changed

= 1.0.2 = 
* Version numbers fixed

= 1.3.2 =
* Stable Version

= 1.3.4 =
* Multisite issues with Widget fixed

= 1.3.5 =
* Administration area redirection fixed
* Automatic email creation added
* Email verification added

= 1.4 =
* Social Network Avatars can be displayed in comments
* Social Login can be disabled below the login form
* Social Login can be disabled below the registration form
* Select redirection target after login
* Select redirection target after registration
* Enable account linking

= 1.5 =
* Social Network Avatars fixed
* Social Buttons no longer displayed for customs hooks if logged in
* KISS for API Settings Setup 

= 1.6 = 
* LiveJournal added
* PayPal added
* Settings link added
* API Communication Check added
* Cyrillic character support

= 1.6.1 =
* Provider unselect bug fixed
* Sanitize user strict added
* Custom namespace for add_settings_link

== Testimonials ==

<strong>Used by thousands of users around the world!</strong>

<em>This service is simply remarkable, I've tried integrating logins before and it has never been this easy!</em>
<strong>Andrew C.</strong>

<em>I found it extremely straightforward. I just figured it out easily and make my website capable of connecting 
to many social networks by your plugin.</em>
<strong>Deha K.</strong>

<em>Just wanted to let you know how happy i am that i stumbled onto your service. This was the 6 Facebook/Twitter integration 
i tried and was starting to loose hope that i could actually find one that worked for me.</em>
<strong>Kyle L.</strong>

<em>I would like to thank YOU! Seriously, the WordPress plugin has been a huge life saver for me.</em>
<strong>Piero B.</strong>

<em>Thank you for the wonderful plugin</em>
<strong>Martin P.</strong>

<em>The service is excellent for what i need, simple to set up. All situations about seting up are well explained, so 
there are no difficulties</em>
<strong>Facundo S.</strong>

<em>I really like the plugin, the capabilities you provide for management and your prompt reply for support.</em>
<strong>Tom B.</strong>

<em>It was extremely easy to set up and use.  The documentation to set up the FB and twitter API
was easy to follow and implement. I was struggling with a couple of other plugins till I stumbled on this one.</em>
<strong>Deepa V.</strong>

<em>Works like a charm!</em>
<strong>Fredrik L.</strong>

<em>Not sure how you can improve it's a Damn! Good product. 100% User friendly easy to setup.. Thanks</em>
<strong>Cody L.</strong>

<em>So far oneall.com is the perfect solution for my site and works flawlessly.  I am extremely impressed and grateful.</em>
<strong>Terry P.</strong>

<em>I've gone in and tweaked it, tested it and it's good to go now! Wonderful, I feel like a grown up blogger now.</em>
<strong>Brian J.</strong>

<em>I am really impressed with your product! Its very dynamic and its gives me the flexibility I need for integration into my own business.</em>
<strong>Braxton D.</strong>