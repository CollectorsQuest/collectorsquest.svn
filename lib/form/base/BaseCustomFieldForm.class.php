<?php

/**
 * CustomField form base class.
 *
 * @method CustomField getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCustomFieldForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'type'       => new sfWidgetFormInputText(),
      'object'     => new sfWidgetFormTextarea(),
      'validation' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 64)),
      'type'       => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'object'     => new sfValidatorString(array('required' => false)),
      'validation' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('custom_field[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CustomField';
  }


}
