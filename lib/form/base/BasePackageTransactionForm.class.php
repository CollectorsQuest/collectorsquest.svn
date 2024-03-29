<?php

/**
 * PackageTransaction form base class.
 *
 * @method PackageTransaction getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasePackageTransactionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'package_id'         => new sfWidgetFormPropelChoice(array('model' => 'Package', 'add_empty' => false)),
      'collector_id'       => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'payment_status'     => new sfWidgetFormInputText(),
      'max_items_for_sale' => new sfWidgetFormInputText(),
      'package_price'      => new sfWidgetFormInputText(),
      'expiry_date'        => new sfWidgetFormDateTime(),
      'created_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'package_id'         => new sfValidatorPropelChoice(array('model' => 'Package', 'column' => 'id')),
      'collector_id'       => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'payment_status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'max_items_for_sale' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'package_price'      => new sfValidatorNumber(array('required' => false)),
      'expiry_date'        => new sfValidatorDateTime(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('package_transaction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PackageTransaction';
  }


}
