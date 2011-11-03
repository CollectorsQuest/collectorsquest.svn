<?php

/**
 * VideoCollectionCategory filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseVideoCollectionCategoryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'video_id'               => new sfWidgetFormPropelChoice(array('model' => 'Video', 'add_empty' => true)),
      'collection_category_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionCategory', 'add_empty' => true)),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'video_id'               => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Video', 'column' => 'id')),
      'collection_category_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectionCategory', 'column' => 'id')),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('video_collection_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VideoCollectionCategory';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'video_id'               => 'ForeignKey',
      'collection_category_id' => 'ForeignKey',
      'created_at'             => 'Date',
    );
  }
}
