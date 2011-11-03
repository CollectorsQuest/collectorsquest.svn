<?php

/**
 * CustomValue form base class.
 *
 * @method CustomValue getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseCustomValueForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'collection_id'  => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => false)),
      'collectible_id' => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => false)),
      'field_id'       => new sfWidgetFormInputText(),
      'value_text'     => new sfWidgetFormInputText(),
      'value_date'     => new sfWidgetFormDate(),
      'value_numeric'  => new sfWidgetFormInputText(),
      'value_bool'     => new sfWidgetFormInputCheckbox(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'CustomValue', 'column' => 'id', 'required' => false)),
      'collection_id'  => new sfValidatorPropelChoice(array('model' => 'Collection', 'column' => 'id')),
      'collectible_id' => new sfValidatorPropelChoice(array('model' => 'Collectible', 'column' => 'id')),
      'field_id'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'value_text'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'value_date'     => new sfValidatorDate(array('required' => false)),
      'value_numeric'  => new sfValidatorNumber(array('required' => false)),
      'value_bool'     => new sfValidatorBoolean(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('custom_value[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CustomValue';
  }


}
