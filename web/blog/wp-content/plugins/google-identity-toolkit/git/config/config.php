<?php
require( dirname(__FILE__) . '/../../../../../wp-load.php' );
/**
 * The configuration for the relying party site customization.
 */
$gitConfig = array(
  // The API key in the Google API console.
  'apiKey' => get_option('git_apikey'),
  // The default URL after the user is logged in.
  'homeUrl' => '',
  // The user signup page.
  'signupUrl' => '',
  // Scan the these absolute directories when finding the implementations e.g. account service and
  // session manager. The multiple directories should be separated by a ,
  'externalClassPaths' => dirname(__FILE__).'/../',
  // The class name that implements the gitAccountService interface. You can also set the
  // implementation instance by leaving it empty and invoking the setter method in the gitContext
  // class. NOTE: The class name should be the same as the file name without the '.php' suffix.
  'accountService' => 'WPAccountService',
  // The class name that implements the gitSessionManager interface. Same as the account service,
  // there is a setter method in the gitContext class. NOTE: the class name should be the same as
  // the file name without the '.php' suffix.
  'sessionManager' => 'WPSessionManager',
	
  'customer_id' => 'customer_id',
  'idpAssertionKey'=>'idpAssertion',
  'pluginName' => 'wp',
);

