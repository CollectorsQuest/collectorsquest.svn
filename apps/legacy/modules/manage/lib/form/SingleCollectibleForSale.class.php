<?php

/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
class SingleCollectibleForSaleForm extends BaseCollectibleForSaleForm
{

  protected $conditions = array('excellent' => 'Excellent', 'very good' => 'Very Good', 'good' => 'Good', 'fair' => 'Fair', 'poor' => 'Poor');

  public function configure()
  {
    $this->useFields(array(
      'price',
      'condition',
      'is_shipping_free',
      'is_ready',
      'quantity',
    ));

//    $this->setWidget('is_post_at_marketplace', new sfWidgetFormInputCheckbox());
    $this->setValidator('is_ready', new sfValidatorBoolean(array('required' => false)));

    $this->setWidget('condition', new sfWidgetFormChoice(array('choices' => $this->conditions)));
    $this->setValidator('condition', new sfValidatorChoice(array('choices' => array_keys($this->conditions))));

    $this->setValidator('price', new cqValidatorPrice(array('required' => false)));
    $this->getValidator('price')->setOption('required', false);

    $this->widgetSchema->setNameFormat('for_sale[%s]');
  }

  public function bind(array $taintedValues = null, array $taintedFiles = null)
  {
    $this->validatorSchema['price']->setOption('required', !empty($taintedValues['is_ready']));
    
    parent::bind($taintedValues, $taintedFiles);
  }
}
