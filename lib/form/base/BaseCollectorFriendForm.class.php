<?php

/**
 * CollectorFriend form base class.
 *
 * @method CollectorFriend getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorFriendForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'friend_id'    => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id' => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'friend_id'    => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
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
