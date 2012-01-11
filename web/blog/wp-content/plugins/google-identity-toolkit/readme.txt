=== Google Identity Toolkit ===
Contributors: easyrp
Donate link: http://code.google.com/apis/identitytoolkit
Tags: openid, twitter, google, yahoo, api, oauth, myspace, linkedin, windows live, login, registration, register, social api, social apis, widget, community, sharing, share, publish, publishing, share button, share widget, social widget, tweet, status update, news feed, newsfeed, social login, social sharing, social sign-on, social sign-in
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 1.0

Google Identity Toolkit (GITkit) helps relying party (RP) websites to support federated login easily (http://code.google.com/apis/identitytoolkit).

== Description ==

This is the GITkit plugin for WordPress 3.x to help website owners to integrate GITkit into their websites. It provides an Account Chooser widget, which allows users to login with their email address and password, and would like to replace that password with federated login. It currently supports Google mail, Hotmail, Yahoo! mail, AOL mail, and Google Apps mail but more identity providers will be added in the future.

If you finished integrating this plugin with your website, please give us some feedback to improve the ease of integration. We may contact with you for any announcement related to Google Identity Toolkit Plugin in the future.
https://docs.google.com/a/google.com/spreadsheet/viewform?hl=en_US&pli=1&formkey=dFlNUHM0Q0ROQjFPaElVSXIxU2VPM3c6MQ#gid=0

== Changelog ==


= 1.0 = Initial Version.

== Installation ==
1. Turn on apache mod_rewrite module in your apache config file. Otherwise, the Google Identity Toolkit plugin will not work properly.
  Enable the mod_rewrite for apache method
   a. Enable the apache config file http.conf, found:"# LoadModule rewrite_module modules / mod_rewrite.so"
      and Remove the front of the line "#"
   b. restart apache
2. Unzip and copy the installation package "google-identity-toolkit.zip" to the WordPress root directory "wp-content/plugins/", Or copy the google-identity-toolkit directory to  "wp-content/plugins/".
3. Go to "Settings/Google Identity Toolkit", enter "APIKey" which you can get from Google Developer Console (https://code.google.com/apis/identitytoolkit/v1/devconsole.html), then click the "Save Changes" button to save your configuration.
4. Refresh your WordPress website and you will see there is a login button on the top-right of the page.


== Upgrade Notice ==



== Arbitrary section ==



== A brief Markdown Example ==



