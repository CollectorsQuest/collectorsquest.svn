<?php

/**
 * Message form base class.
 *
 * @method Message getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseMessageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'message_id' => new sfWidgetFormInputHidden(),
      'queue_id'   => new sfWidgetFormPropelChoice(array('model' => 'Queue', 'add_empty' => false)),
      'handle'     => new sfWidgetFormInputText(),
      'body'       => new sfWidgetFormInputText(),
      'md5'        => new sfWidgetFormInputText(),
      'timeout'    => new sfWidgetFormInputText(),
      'created'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'message_id' => new sfValidatorPropelChoice(array('model' => 'Message', 'column' => 'message_id', 'required' => false)),
      'queue_id'   => new sfValidatorPropelChoice(array('model' => 'Queue', 'column' => 'queue_id')),
      'handle'     => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'body'       => new sfValidatorString(array('max_length' => 8192)),
      'md5'        => new sfValidatorString(array('max_length' => 32)),
      'timeout'    => new sfValidatorNumber(array('required' => false)),
      'created'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Message', 'column' => array('handle')))
    );

    $this->widgetSchema->setNameFormat('message[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Message';
  }


}
