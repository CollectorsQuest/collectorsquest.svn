<?php

/**
 * CollectorMessage form base class.
 *
 * @method CollectorMessage getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseCollectorMessageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'sender'     => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'receiver'   => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'subject'    => new sfWidgetFormInputText(),
      'body'       => new sfWidgetFormTextarea(),
      'new_msg'    => new sfWidgetFormInputCheckbox(),
      'thread'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'CollectorMessage', 'column' => 'id', 'required' => false)),
      'sender'     => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'receiver'   => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'subject'    => new sfValidatorString(array('max_length' => 100)),
      'body'       => new sfValidatorString(),
      'new_msg'    => new sfValidatorBoolean(array('required' => false)),
      'thread'     => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collector_message[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorMessage';
  }


}
