<?php

/**
 * PackageTransaction form base class.
 *
 * @method PackageTransaction getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BasePackageTransactionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'collector_id'       => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'package_id'         => new sfWidgetFormPropelChoice(array('model' => 'Package', 'add_empty' => false)),
      'max_items_for_sale' => new sfWidgetFormInputText(),
      'package_price'      => new sfWidgetFormInputText(),
      'expiry_date'        => new sfWidgetFormDateTime(),
      'payment_status'     => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorPropelChoice(array('model' => 'PackageTransaction', 'column' => 'id', 'required' => false)),
      'collector_id'       => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'package_id'         => new sfValidatorPropelChoice(array('model' => 'Package', 'column' => 'id')),
      'max_items_for_sale' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'package_price'      => new sfValidatorNumber(array('required' => false)),
      'expiry_date'        => new sfValidatorDateTime(array('required' => false)),
      'payment_status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
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
