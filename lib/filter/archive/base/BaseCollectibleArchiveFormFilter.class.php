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
      'graph_id'          => new sfWidgetFormFilterInput(),
      'collector_id'      => new sfWidgetFormFilterInput(),
      'collection_id'     => new sfWidgetFormFilterInput(),
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'              => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_comments'      => new sfWidgetFormFilterInput(),
      'batch_hash'        => new sfWidgetFormFilterInput(),
      'score'             => new sfWidgetFormFilterInput(),
      'position'          => new sfWidgetFormFilterInput(),
      'is_name_automatic' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'eblob'             => new sfWidgetFormFilterInput(),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'archived_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'graph_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collector_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collection_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'              => new sfValidatorPass(array('required' => false)),
      'slug'              => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'num_comments'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'batch_hash'        => new sfValidatorPass(array('required' => false)),
      'score'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_name_automatic' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'eblob'             => new sfValidatorPass(array('required' => false)),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
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
      'graph_id'          => 'Number',
      'collector_id'      => 'Number',
      'collection_id'     => 'Number',
      'name'              => 'Text',
      'slug'              => 'Text',
      'description'       => 'Text',
      'num_comments'      => 'Number',
      'batch_hash'        => 'Text',
      'score'             => 'Number',
      'position'          => 'Number',
      'is_name_automatic' => 'Boolean',
      'eblob'             => 'Text',
      'updated_at'        => 'Date',
      'created_at'        => 'Date',
      'archived_at'       => 'Date',
    );
  }
}
