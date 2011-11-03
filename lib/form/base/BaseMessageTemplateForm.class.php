<?php

/**
 * MessageTemplate form base class.
 *
 * @method MessageTemplate getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseMessageTemplateForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'subject'     => new sfWidgetFormInputText(),
      'body'        => new sfWidgetFormTextarea(),
      'description' => new sfWidgetFormInputText(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'MessageTemplate', 'column' => 'id', 'required' => false)),
      'subject'     => new sfValidatorString(array('max_length' => 255)),
      'body'        => new sfValidatorString(),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('message_template[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MessageTemplate';
  }


}
