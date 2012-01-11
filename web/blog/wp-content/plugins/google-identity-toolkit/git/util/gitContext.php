<?php
/**
 * The factory class holds the handles of the classes. The relying party site needs to call the
 * setter functions here to provide the interface implementation.
 */

class gitContext {
  private static $dasherDomainChecker = false;
  private static $apiClient = false;
  private static $config = false;
  private static $accountService = false;
  private static $sessionManager = false;

  private static function loadExternal($className) {
    $config = self::getConfig();
    $paths = explode(',', $config->getExtensionClassPaths());
    foreach ($paths as $path) {
      if (!empty($path) && $path[strlen($path) - 1] != '/') {
        $path .= '/';
      }
      $fileName = $path . $className . '.php';
      if (file_exists($fileName)) {
        require_once($fileName);
        return true;
      }
    }
    return false;
  }

  /**
   * Returns the account service instance which is implemented by the relying party site.
   * @static
   * @return mixed account service instance if it's created successfully otherwise false.
   */
  public static function getAccountService() {
    if (!self::$accountService) {
      $className = self::getConfig()->getAccountServiceName();
      if (self::loadExternal($className)) {
        self::$accountService = new $className;
      }
    }
    return self::$accountService;
  }

  /**
   * Sets the account service.
   */
  public static function setAccountService($accountService) {
    self::$accountService = $accountService;
  }

  /**
   * Returns the session manager instance which is implemented by the relying party site.
   * @static
   * @return mixed session manager instance if it's created successfully otherwise false.
   */
  public static function getSessionManager() {
    if (!self::$sessionManager) {
      $className = self::getConfig()->getSessionManagerName();
      if (self::loadExternal($className)) {
        self::$sessionManager = new $className;
      }
    }
    return self::$sessionManager;
  }

  /**
   * Sets the session manager instance.
   */
  public static function setSessionManager($sessionManager) {
    self::$sessionManager = $sessionManager;
  }

  public static function getDasherDomainChecker() {
    if (empty(self::$dasherDomainChecker)) {
      self::$dasherDomainChecker = new gitDasherDomainChecker();
    }
    return self::$dasherDomainChecker;
  }

  public static function setDasherDomainChecker($dasherDomainChecker) {
    self::$dasherDomainChecker = $dasherDomainChecker;
  }

  public static function setConfig($config) {
    self::$config = $config;
  }

  public static function getConfig() {
    if (empty(self::$config)) {
      self::$config = new gitConfig(true);
    }
    return self::$config;
  }

  public static function getApiClient() {
    if (empty(self::$apiClient)) {
      self::$apiClient = new gitApiClient(self::getConfig()->getApiKey());
    }
    return self::$apiClient;
  }
}
