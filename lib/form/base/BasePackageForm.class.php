<?php

/**
 * Package form base class.
 *
 * @method Package getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasePackageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'package_name'        => new sfWidgetFormInputText(),
      'package_description' => new sfWidgetFormTextarea(),
      'max_items_for_sale'  => new sfWidgetFormInputText(),
      'package_price'       => new sfWidgetFormInputText(),
      'plan_type'           => new sfWidgetFormInputText(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'created_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorPropelChoice(array('model' => 'Package', 'column' => 'id', 'required' => false)),
      'package_name'        => new sfValidatorString(array('max_length' => 255)),
      'package_description' => new sfValidatorString(array('required' => false)),
      'max_items_for_sale'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'package_price'       => new sfValidatorNumber(array('required' => false)),
      'plan_type'           => new sfValidatorString(),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('package[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Package';
  }


}
