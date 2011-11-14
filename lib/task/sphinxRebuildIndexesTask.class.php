<?php

class sphinxRebuildIndexesTask extends sfBaseTask
{
  protected function configure()
  {
    $this->addArguments(array(
      new sfCommandArgument('indexes', sfCommandArgument::OPTIONAL, 'Sphinx indexes to rebuild'),
    ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('delta', null, sfCommandOption::PARAMETER_OPTIONAL, 'Whether to build the deltas only', 'no')
    ));

    $this->namespace        = 'sphinx';
    $this->name             = 'rebuild-indexes';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [sphinx:rebuild-indexes|INFO] task rebuilds all Autohop sphinx indexes or only the ones specified.
Call it with:

  [php symfony sphinx:rebuild-indexes|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // We need to run this task with root or www-data users
    if (!in_array(get_current_user(), array('root', 'www-data')))
    {
      $this->logBlock('You must run this task with root or www-data priviliges!', 'ERROR');
      return false;
    }

    $indexes = array();

    if (empty($arguments["indexes"]))
    {
      if ($options['delta'] == 'yes')
      {
        $indexes[] = sprintf('%s_blog_delta', $options['env']);
      }
      else
      {
        $indexes[] = sprintf('%s_collections', $options['env']);
        $indexes[] = sprintf('%s_collectors', $options['env']);
        $indexes[] = sprintf('%s_collectibles', $options['env']);
        $indexes[] = sprintf('%s_blog', $options['env']);
      }
    }
    else
    {
      $indexes = explode(',', $arguments["indexes"]);
    }

    if (!empty($indexes))
    {
      // Create a temporary Sphinx config file
      $conf = tempnam('/www/tmp', 'sphinx_config_');

      $files = sfFinder::type('file')->sort_by_name()->name('/sphinx\.?(.*)?\.conf$/')->maxdepth(1)->in(sfConfig::get('sf_config_dir'));
      foreach ($files as $file)
      {
        file_put_contents($conf, file_get_contents($file), FILE_APPEND);
      }

      // Add the main configuration file
      file_put_contents($conf, file_get_contents('/www/etc/sphinx/sphinx.conf'), FILE_APPEND);
      $cmd = sprintf('/opt/sphinx/bin/indexer --rotate --config %s %s', $conf, implode(' ', $indexes));

      if (get_current_user() == 'root')
      {
        chown($conf, 'www-data');
        $cmd = 'sudo -u www-data '. $cmd;
      }

      // Run the command
      passthru($cmd);

      // Remove the temp config file
      unlink($conf);
    }
  }
}
