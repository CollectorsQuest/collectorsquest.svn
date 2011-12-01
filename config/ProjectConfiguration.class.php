<?php

date_default_timezone_set('America/New_York');

require_once '/www/libs/symfony-1.4.x/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    setlocale(LC_ALL, 'en_US.utf8');
    iconv_set_encoding('input_encoding', 'UTF-8');
    iconv_set_encoding('output_encoding', 'UTF-8');
    iconv_set_encoding('internal_encoding', 'UTF-8');

    $this->dispatcher->connect('application.throw_exception', array('cqStatic', 'exceptionNotifier'));

    $this->enablePlugins(
      'sfPropelORMPlugin', 'sfPropelMigrationsLightPlugin',
      'sfFormExtraPlugin', 'sfGuardPlugin', 'sfGravatarPlugin'
    );

    $this->enablePlugins(
      'iceAssetsPlugin', 'iceBehaviorsPlugin', 'iceLibsPlugin',
      'iceTaggablePlugin', 'iceBackendPlugin', 'iceJobQueuePlugin'
    );
  }
}
