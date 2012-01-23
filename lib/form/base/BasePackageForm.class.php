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
      'plan_type'           => new sfWidgetFormInputText(),
      'package_name'        => new sfWidgetFormInputText(),
      'package_description' => new sfWidgetFormTextarea(),
      'max_items_for_sale'  => new sfWidgetFormInputText(),
      'package_price'       => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'plan_type'           => new sfValidatorString(),
      'package_name'        => new sfValidatorString(array('max_length' => 255)),
      'package_description' => new sfValidatorString(array('required' => false)),
      'max_items_for_sale'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'package_price'       => new sfValidatorNumber(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(array('required' => false)),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
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
