<?php

/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
class ManageCollectiblesForm extends sfForm
{
  public function configure()
  {
    $i = 0;
    /* @var $collectible Collectible */
    foreach ($this->getDefault('collectibles') as $item)
    {
      $this->embedForm($i++, new SingleCollectibleForm($item));
    }

    $this->getWidgetSchema()->setNameFormat('collectibles[%s]');
  }

  public function bind(array $taintedValues = null, array $taintedFiles = null)
  {
    foreach ($taintedValues as $key => $value)
    {
      if (!empty($value['for_sale']['is_ready']))
      {
        $this->validatorSchema[$key]['for_sale']['price']->setOption('required', true);
        $this->validatorSchema[$key]['description']->setOption('required', true);
        $this->validatorSchema[$key]['tags']->setOption('required', true);
      }
    }

    return parent::bind($taintedValues, $taintedFiles);
  }

}