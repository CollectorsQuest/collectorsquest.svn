<?php

/**
 * PrivateMessage form base class.
 *
 * @method PrivateMessage getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BasePrivateMessageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'thread'       => new sfWidgetFormInputText(),
      'sender'       => new sfWidgetFormInputText(),
      'receiver'     => new sfWidgetFormInputText(),
      'subject'      => new sfWidgetFormInputText(),
      'body'         => new sfWidgetFormTextarea(),
      'is_rich'      => new sfWidgetFormInputCheckbox(),
      'is_read'      => new sfWidgetFormInputCheckbox(),
      'is_replied'   => new sfWidgetFormInputCheckbox(),
      'is_forwarded' => new sfWidgetFormInputCheckbox(),
      'is_marked'    => new sfWidgetFormInputCheckbox(),
      'is_deleted'   => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'PrivateMessage', 'column' => 'id', 'required' => false)),
      'thread'       => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'sender'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'receiver'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'subject'      => new sfValidatorString(array('max_length' => 255)),
      'body'         => new sfValidatorString(),
      'is_rich'      => new sfValidatorBoolean(array('required' => false)),
      'is_read'      => new sfValidatorBoolean(array('required' => false)),
      'is_replied'   => new sfValidatorBoolean(array('required' => false)),
      'is_forwarded' => new sfValidatorBoolean(array('required' => false)),
      'is_marked'    => new sfValidatorBoolean(array('required' => false)),
      'is_deleted'   => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('private_message[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrivateMessage';
  }


}
