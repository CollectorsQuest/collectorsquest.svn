<?php

/**
 * EventVideo form base class.
 *
 * @method EventVideo getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseEventVideoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'event_id'    => new sfWidgetFormPropelChoice(array('model' => 'Event', 'add_empty' => true)),
      'title'       => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'lenght'      => new sfWidgetFormInputText(),
      'thumb_small' => new sfWidgetFormInputText(),
      'thumb_large' => new sfWidgetFormInputText(),
      'filename'    => new sfWidgetFormInputText(),
      'views'       => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'EventVideo', 'column' => 'id', 'required' => false)),
      'event_id'    => new sfValidatorPropelChoice(array('model' => 'Event', 'column' => 'id', 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 128)),
      'description' => new sfValidatorString(),
      'lenght'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'thumb_small' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'thumb_large' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'filename'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'views'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('event_video[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EventVideo';
  }


}
