<?php

/**
 * CollectibleArchive filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectibleArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'collection_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'              => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_comments'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'score'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'position'          => new sfWidgetFormFilterInput(),
      'is_name_automatic' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'archived_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collector_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collection_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'              => new sfValidatorPass(array('required' => false)),
      'slug'              => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'num_comments'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'score'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_name_automatic' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'archived_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collectible_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleArchive';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'collector_id'      => 'Number',
      'collection_id'     => 'Number',
      'name'              => 'Text',
      'slug'              => 'Text',
      'description'       => 'Text',
      'num_comments'      => 'Number',
      'score'             => 'Number',
      'position'          => 'Number',
      'is_name_automatic' => 'Boolean',
      'archived_at'       => 'Date',
    );
  }
}
