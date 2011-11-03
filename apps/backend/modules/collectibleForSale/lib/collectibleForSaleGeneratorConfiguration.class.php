<?php

/**
 * collectibleForSale module configuration.
 *
 * @package    CollectorsQuest
 * @subpackage collectibleForSale
 * @author     Kiril Angov
 * @version    SVN: $Id$
 */
class collectibleForSaleGeneratorConfiguration extends BaseCollectibleForSaleGeneratorConfiguration
{
  public function getDefaultSort()
  {
    return array('created_at', 'desc');
  }

}
