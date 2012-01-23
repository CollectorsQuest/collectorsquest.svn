<?php

/**
 * CollectorEmail form base class.
 *
 * @method CollectorEmail getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorEmailForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'email'        => new sfWidgetFormInputText(),
      'hash'         => new sfWidgetFormInputText(),
      'salt'         => new sfWidgetFormInputText(),
      'is_verified'  => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id' => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'email'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'hash'         => new sfValidatorString(array('max_length' => 40)),
      'salt'         => new sfValidatorString(array('max_length' => 32)),
      'is_verified'  => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collector_email[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorEmail';
  }


}
