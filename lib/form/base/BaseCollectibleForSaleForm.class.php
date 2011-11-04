<?php

/**
 * CollectibleForSale form base class.
 *
 * @method CollectibleForSale getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectibleForSaleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'collectible_id'      => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => false)),
      'price'               => new sfWidgetFormInputText(),
      'condition'           => new sfWidgetFormInputText(),
      'is_price_negotiable' => new sfWidgetFormInputCheckbox(),
      'is_shipping_free'    => new sfWidgetFormInputCheckbox(),
      'is_sold'             => new sfWidgetFormInputCheckbox(),
      'is_ready'            => new sfWidgetFormInputCheckbox(),
      'quantity'            => new sfWidgetFormInputText(),
      'deleted_at'          => new sfWidgetFormDateTime(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collectible_id'      => new sfValidatorPropelChoice(array('model' => 'Collectible', 'column' => 'id')),
      'price'               => new sfValidatorNumber(array('required' => false)),
      'condition'           => new sfValidatorString(),
      'is_price_negotiable' => new sfValidatorBoolean(array('required' => false)),
      'is_shipping_free'    => new sfValidatorBoolean(array('required' => false)),
      'is_sold'             => new sfValidatorBoolean(array('required' => false)),
      'is_ready'            => new sfValidatorBoolean(array('required' => false)),
      'quantity'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'deleted_at'          => new sfValidatorDateTime(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(array('required' => false)),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectibleForSale', 'column' => array('collectible_id')))
    );

    $this->widgetSchema->setNameFormat('collectible_for_sale[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleForSale';
  }


}
