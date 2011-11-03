<?php

class frontendConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
    /**
     * @see http://wiki.github.com/facebook/xhp
     */
    if (extension_loaded('xhp'))
    {
      include_once(sfConfig::get('sf_lib_dir') .'/vendor/xhp.php');
    }
  }
}
