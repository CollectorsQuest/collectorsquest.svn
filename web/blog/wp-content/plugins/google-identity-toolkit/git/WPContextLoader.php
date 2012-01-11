<?php
require_once(dirname(__FILE__) . '/handler/gitLoginHandler.php');
require_once(dirname(__FILE__) . '/util/gitConfig.php');
require_once(dirname(__FILE__) . '/util/gitApiClient.php');
require_once(dirname(__FILE__) . '/util/gitContext.php');
require_once(dirname(__FILE__) . '/WPAccountService.php');
require_once(dirname(__FILE__) . '/WPSessionManager.php');

class WPContextLoader{
	public static function load() {
		$config = new gitConfig(true);
	
    	gitContext::setConfig($config);
		gitContext::setAccountService(new WPAccountService());
		gitContext::setSessionManager(new WPSessionManager());
	}
}
?>