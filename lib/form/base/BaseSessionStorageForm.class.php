<?php

/**
 * SessionStorage form base class.
 *
 * @method SessionStorage getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseSessionStorageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'session_id'   => new sfWidgetFormInputText(),
      'session_data' => new sfWidgetFormTextarea(),
      'session_time' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'session_id'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'session_data' => new sfValidatorString(array('required' => false)),
      'session_time' => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9.2233720368548E+18, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('session_storage[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SessionStorage';
  }


}
