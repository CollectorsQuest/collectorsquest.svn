<?php

class cqApplicationConfiguration extends sfApplicationConfiguration
{
  /**
   * Various initializations.
   */
  public function initConfiguration()
  {
    $configCache = $this->getConfigCache();

    // in debug mode, start global timer
    if ($this->isDebug() && !sfWebDebugPanelTimer::isStarted())
    {
      sfWebDebugPanelTimer::startTime();
    }

    // required core classes for the framework
    if (!$this->isDebug() && !sfConfig::get('sf_test') && !self::$coreLoaded)
    {
      $configCache->import('config/core_compile.yml', false);
    }

    // autoloader(s)
    $this->dispatcher->connect('autoload.filter_config', array($this, 'filterAutoloadConfig'));
    sfAutoload::getInstance()->register();
    if ($this->isDebug())
    {
      sfAutoloadAgain::getInstance()->register();
    }

    // load base settings
    include($configCache->checkConfig('config/settings.yml'));
    if ($file = $configCache->checkConfig('config/app.yml', true))
    {
      include($file);
    }
    if ($file = $configCache->checkConfig('config/secure/app.yml', true))
    {
      include($file);
    }

    if (false !== sfConfig::get('sf_csrf_secret'))
    {
      sfForm::enableCSRFProtection(sfConfig::get('sf_csrf_secret'));
    }

    sfWidget::setCharset(sfConfig::get('sf_charset'));
    sfValidatorBase::setCharset(sfConfig::get('sf_charset'));

    // force setting default timezone if not set
    if ($default_timezone = sfConfig::get('sf_default_timezone'))
    {
      date_default_timezone_set($default_timezone);
    }
    else if (sfConfig::get('sf_force_default_timezone', true))
    {
      date_default_timezone_set(@date_default_timezone_get());
    }

    // error settings
    ini_set('display_errors', $this->isDebug() ? 'on' : 'off');
    error_reporting(sfConfig::get('sf_error_reporting'));

    // initialize plugin configuration objects
    $this->initializePlugins();

    // compress output
    if (!self::$coreLoaded)
    {
      ob_start(sfConfig::get('sf_compressed') ? 'ob_gzhandler' : '');
    }

    self::$coreLoaded = true;
  }
}