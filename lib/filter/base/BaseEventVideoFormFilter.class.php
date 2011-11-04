<?php

/**
 * EventVideo filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseEventVideoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'event_id'    => new sfWidgetFormPropelChoice(array('model' => 'Event', 'add_empty' => true)),
      'title'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lenght'      => new sfWidgetFormFilterInput(),
      'thumb_small' => new sfWidgetFormFilterInput(),
      'thumb_large' => new sfWidgetFormFilterInput(),
      'filename'    => new sfWidgetFormFilterInput(),
      'views'       => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'event_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Event', 'column' => 'id')),
      'title'       => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'lenght'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'thumb_small' => new sfValidatorPass(array('required' => false)),
      'thumb_large' => new sfValidatorPass(array('required' => false)),
      'filename'    => new sfValidatorPass(array('required' => false)),
      'views'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('event_video_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EventVideo';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'event_id'    => 'ForeignKey',
      'title'       => 'Text',
      'description' => 'Text',
      'lenght'      => 'Number',
      'thumb_small' => 'Text',
      'thumb_large' => 'Text',
      'filename'    => 'Text',
      'views'       => 'Number',
      'created_at'  => 'Date',
    );
  }
}
