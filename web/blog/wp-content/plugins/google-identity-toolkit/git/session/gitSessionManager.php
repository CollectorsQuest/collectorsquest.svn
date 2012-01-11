<?php
/**
 * Manages data in the session. The relying party site may save session data in server side (in
 * memory or persistent storage) or in the client side (cookie).
 */
interface gitSessionManager {

  /**
   * Gets the logged in account in the current session.
   * @return mixed the logged in account or NULL if there is no account logged in.
   */
  function getSessionAccount();

  /**
   * Saves the logged account information to the session and logs the user in. If parameter is NULL,
   * the account in the session should be removed.
   * @param mixed $account the account which should be logged in.
   */
  function setSessionAccount($account);

  /**
   * Gets the IDP assertion for the request.
   * @return mixed the IDP assertion
   */
  function getAssertion();

  /**
   * Saves the IDP assertion information to the session. If parameter is NULL, the data in the
   * session should be cleared.
   * @param mixed $assertion the data to be saved.
   */
  function setAssertion($assertion);
}
