<?php

/**
 * CollectionArchive filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectionArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collection_category_id' => new sfWidgetFormFilterInput(),
      'collector_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_items'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_views'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_comments'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_ratings'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'score'                  => new sfWidgetFormFilterInput(),
      'is_public'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_featured'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comments_on'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rating_on'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'archived_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collection_category_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collector_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'slug'                   => new sfValidatorPass(array('required' => false)),
      'description'            => new sfValidatorPass(array('required' => false)),
      'num_items'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_views'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_comments'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_ratings'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'score'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_public'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_featured'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comments_on'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rating_on'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'archived_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collection_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionArchive';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'collection_category_id' => 'Number',
      'collector_id'           => 'Number',
      'name'                   => 'Text',
      'slug'                   => 'Text',
      'description'            => 'Text',
      'num_items'              => 'Number',
      'num_views'              => 'Number',
      'num_comments'           => 'Number',
      'num_ratings'            => 'Number',
      'score'                  => 'Number',
      'is_public'              => 'Boolean',
      'is_featured'            => 'Boolean',
      'comments_on'            => 'Boolean',
      'rating_on'              => 'Boolean',
      'archived_at'            => 'Date',
    );
  }
}
