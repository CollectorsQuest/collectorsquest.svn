<?php

/**
 * Configuration class. It reads the key/value pair from the config/config.php file.
 */

class gitConfig {
  private $config;

  private function loadConfigFile() {
    global $gitConfig;
    require_once(realpath(dirname(__FILE__) . '/../') . '/config/config.php');
    foreach($gitConfig as $key => $value) {
      $this->config[$key] = $value;
    }
  }
  
  public function __construct($loadConfigFile = false) {
   $this->config = array();
    if ($loadConfigFile) {
      $this->loadConfigFile();
    }
  }

  private function get($key) {
    if (isset($this->config[$key])) {
      return $this->config[$key];
    } else {
      return NULL;
    }
  }

  private function set($key, $value) {
    $this->config[$key] = $value;
  }

  public function setHomeUrl($value) {
    return $this->set('homeUrl', $value);
  }

  public function getHomeUrl() {
    return $this->get('homeUrl');
  }

  public function setSignupUrl($value) {
    return $this->set('signupUrl', $value);
  }

  public function getSignupUrl() {
    return $this->get('signupUrl');
  }

  public function setApiKey($value) {
    return $this->set('apiKey', $value);
  }

  public function getApiKey() {
    return $this->get('apiKey');
  }

  public function getExtensionClassPaths() {
    return $this->get('externalClassPaths');
  }

  public function getAccountServiceName() {
    return $this->get('accountService');
  }

  public function getSessionManagerName() {
    return $this->get('sessionManager');
  }
 
  public function getPluginName(){
    return $this->get('pluginName');
  }
 
  public function setPluginName($value){
    return $this->get('pluginName', $value);
  }
}
