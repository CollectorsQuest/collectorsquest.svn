<?php

/**
 * CollectorFriend filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseCollectorFriendFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'friend_id'    => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collector_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'friend_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collector_friend_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorFriend';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'collector_id' => 'ForeignKey',
      'friend_id'    => 'ForeignKey',
      'created_at'   => 'Date',
    );
  }
}
