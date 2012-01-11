<?php
require_once(dirname(__FILE__) . '/data/gitAccountService.php');
require_once(dirname(__FILE__) . '/data/gitAccount.php');

require( dirname(__FILE__) . '/../../../../wp-load.php' );

class WPAccountService implements gitAccountService{
/**
   * Given the email returns the account or NULL if the account doesn't exist.
   *
   * @param string $email the email to be checked
   * @return mixed the account object or NULL if not exist.
   */
	function getAccountByEmail($email){
		global $wpdb;
		$email = strtolower($email);
		$ret = NULL;
		$cache = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE user_email='$email'");
		if (empty($cache->user_email)){
			$cache = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE user_login='$email'");
		}
		
		if (isset($cache->user_email)){
			if (isset($cache->type) && $cache->type == 1){
				$type = gitAccount::FEDERATED;
			} else {
				$type = gitAccount::LEGACY;
			}
			$ret = new gitAccount($cache->user_email, $type);
			$ret->setLocalId($cache->ID);
			$ret->setDisplayName($cache->user_login);
		} else {
			$ret = NULL;
		}
		
		return $ret;
	}
  
  /**
   * Returns true if the email and password pair is correct.
   *
   * @param string $email the user input email
   * @param string $password the user input password
   */
  function checkPassword($email, $password){
  	global $wpdb;
	$email = strtolower($email);
	$account = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE user_email='$email'");
	if (empty($account)){
		$account = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE user_login='$email'");
	}
	if (empty($account)) {
		return FALSE;
	} else {
		return user_pass_ok($account->user_login, $password);
	}
  }
  
  
   /**
   * Given the email upgrade the corresponding account to use federated login. The password of the
   * account should be removed.
   *
   * @param string $email the ID for the account to be upgraded
   * @return bool true if the operation succeeds.
   */
  function toFederated($email){
  	global $wpdb;
	$email = strtolower($email);
	
	$wpdb->query("UPDATE $wpdb->users SET type=1 WHERE user_email='$email'");
	
	return TRUE;
  }
}
  
?>