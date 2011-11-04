<?php

/**
 * PrivateMessageTemplate form base class.
 *
 * @method PrivateMessageTemplate getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasePrivateMessageTemplateForm extends BaseFormPropel
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
      'id'          => new sfValidatorPropelChoice(array('model' => 'PrivateMessageTemplate', 'column' => 'id', 'required' => false)),
      'subject'     => new sfValidatorString(array('max_length' => 255)),
      'body'        => new sfValidatorString(),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('private_message_template[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrivateMessageTemplate';
  }


}
