<?php

class cqApplicationConfiguration extends IceApplicationConfiguration
{
  /**
   * Various initializations.
   */
  public function initConfiguration()
  {
    parent::initConfiguration();

    if ($file = $this->getConfigCache()->checkConfig('config/secure/app.yml', true))
    {
      include($file);
    }
  }
}
