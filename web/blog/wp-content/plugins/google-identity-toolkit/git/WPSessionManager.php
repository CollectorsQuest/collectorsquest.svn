<?php
// require_once(dirname(__FILE__) . '/data/gitAccountService.php');
require_once(dirname(__FILE__) . '/session/gitSessionManager.php');
require( dirname(__FILE__) . '/../../../../wp-load.php' );

/**
 * A simple implementation for the SessionManager.
 */
class WPSessionManager implements gitSessionManager {
	/**
   * Gets the logged in account in the current session.
   * @return mixed the logged in account or NULL if there is no account logged in.
   */
	function getSessionAccount(){
		global $wpdb;
		
		$customer_id = $_SESSION['customer_id'];
		$account = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID='$customer_id'");
		
		if (isset($account->type) && $account->type == 1) {
			$ret = new gitAccount($account->user_email, $account->type);
			$ret->setLocalId($account->ID);
			
			return $ret;
		}
		
		return NULL;
	}
  /**
   * Saves the logged account information to the session and logs the user in. If parameter is NULL,
   * the account in the session should be removed.
   * @param mixed $account the account which should be logged in.
   */
	function setSessionAccount($account){
		if (empty($account)) {
			unset($_SESSION['customer_id']);
		} else {
			$_SESSION['customer_id'] = $account->getLocalId();
		}
	}

  /**
   * Gets the IDP assertion for the request.
   * @return mixed the IDP assertion
   */
	 function getAssertion(){
		if (isset($_SESSION['idpAssertion'])) {
			return gitAssertion::fromString($_SESSION['idpAssertion']);
		}
		return NULL;
	}

  /**
   * Saves the IDP assertion information to the session. If parameter is NULL, the data in the
   * session should be cleared.
   * @param mixed $assertion the data to be saved.
   */
  function setAssertion($assertion){
  	$_SESSION['idpAssertion'] = (string)$assertion;
  }
}

?>