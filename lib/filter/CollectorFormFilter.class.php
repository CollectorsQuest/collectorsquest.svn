<?php

/**
 * Collector filter form.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 * @version    SVN: $Id: sfPropelFormFilterTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class CollectorFormFilter extends BaseCollectorFormFilter
{
  public function configure()
  {
      $this->useFields(array(
              'username',
              'display_name',
              'email',
              'what_you_collect',
              'what_you_sell',
              'company',
              'user_type',
              'annually_spend',
              'created_at',
                             ));

      $this->setWidget('user_type', new sfWidgetFormChoice(array('choices'=>$this->getCollectorTypes())));
      $this->setValidator('user_type', new sfValidatorChoice(array('choices'=>$this->getCollectorTypes(), 'required'=>false)));
  }

  public function getCollectorTypes()
  {
      return array(
          '' => '',
          'Collector' => 'Collector',
          'Seller' => 'Seller',
                   );
  }
}
