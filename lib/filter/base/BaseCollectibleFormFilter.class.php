<?php

/**
 * Collectible filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectibleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'graph_id'          => new sfWidgetFormFilterInput(),
      'collector_id'      => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'collection_id'     => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'              => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_comments'      => new sfWidgetFormFilterInput(),
      'batch_hash'        => new sfWidgetFormFilterInput(),
      'score'             => new sfWidgetFormFilterInput(),
      'position'          => new sfWidgetFormFilterInput(),
      'is_name_automatic' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'eblob'             => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'graph_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collector_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'collection_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collection', 'column' => 'id')),
      'name'              => new sfValidatorPass(array('required' => false)),
      'slug'              => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'num_comments'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'batch_hash'        => new sfValidatorPass(array('required' => false)),
      'score'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_name_automatic' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'eblob'             => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collectible_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Collectible';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'graph_id'          => 'Number',
      'collector_id'      => 'ForeignKey',
      'collection_id'     => 'ForeignKey',
      'name'              => 'Text',
      'slug'              => 'Text',
      'description'       => 'Text',
      'num_comments'      => 'Number',
      'batch_hash'        => 'Text',
      'score'             => 'Number',
      'position'          => 'Number',
      'is_name_automatic' => 'Boolean',
      'eblob'             => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
