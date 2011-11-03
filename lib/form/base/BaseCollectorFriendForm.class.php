<?php

/**
 * CollectorFriend form base class.
 *
 * @method CollectorFriend getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseCollectorFriendForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'friend_id'    => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'CollectorFriend', 'column' => 'id', 'required' => false)),
      'collector_id' => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'friend_id'    => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collector_friend[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorFriend';
  }


}
