<?php
/**
 * A simple implementation for the SessionManager.
 */
class gitSessionBasedSessionManager implements gitSessionManager {
  private $config;
  private $accountService;

  public function __construct(gitConfig $config, gitAccountService $accountService) {
    $this->config = $config;
    $this->accountService = $accountService;
  }

  /**
   * Gets the logged in account in the current session.
   * @return mixed the logged in account or NULL if there is no account logged in.
   */
  public function getSessionAccount() {
    if (isset($this->config->sessionUserKey) && isset($_SESSION[$this->config->sessionUserKey])) {
      return $this->accountService->getAccountByEmail($_SESSION[$this->config->sessionUserKey]);
    }
    return NULL;
  }

  /**
   * Saves the logged account information to the session and logs the user in. If parameter is NULL,
   * the account in the session should be removed.
   * @param mixed $account the account which should be logged in.
   */
  public function setSessionAccount($account) {
    $_SESSION[$this->config->sessionUserKey] = $account->getEmail();
  }

  /**
   * Gets the IDP assertion for the request.
   * @return mixed the IDP assertion
   */
  public function getAssertion() {
    if (isset($this->config->idpAssertionKey) && isset($_SESSION[$this->config->idpAssertionKey])) {
      return gitAssertion::fromString($_SESSION[$this->config->idpAssertionKey]);
    }
    return NULL;
  }

  /**
   * Saves the IDP assertion information to the session. If parameter is NULL, the data in the
   * session should be cleared.
   * @param mixed $assertion the data to be saved.
   */
  public function setAssertion($assertion) {
    $_SESSION[$this->config->idpAssertionKey] = (string)$assertion;
  }
}
