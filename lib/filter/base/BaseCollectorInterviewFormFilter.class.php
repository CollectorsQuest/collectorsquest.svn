<?php

/**
 * CollectorInterview filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectorInterviewFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id'           => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'collection_category_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionCategory', 'add_empty' => true)),
      'collection_id'          => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'title'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'catch_phrase'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_active'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collector_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'collection_category_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectionCategory', 'column' => 'id')),
      'collection_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collection', 'column' => 'id')),
      'title'                  => new sfValidatorPass(array('required' => false)),
      'catch_phrase'           => new sfValidatorPass(array('required' => false)),
      'is_active'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collector_interview_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorInterview';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'collector_id'           => 'ForeignKey',
      'collection_category_id' => 'ForeignKey',
      'collection_id'          => 'ForeignKey',
      'title'                  => 'Text',
      'catch_phrase'           => 'Text',
      'is_active'              => 'Boolean',
      'created_at'             => 'Date',
    );
  }
}
