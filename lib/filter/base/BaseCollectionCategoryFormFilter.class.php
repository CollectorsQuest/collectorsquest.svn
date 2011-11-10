<?php

/**
 * CollectionCategory filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectionCategoryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'parent_id' => new sfWidgetFormFilterInput(),
      'name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'score'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'parent_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'      => new sfValidatorPass(array('required' => false)),
      'slug'      => new sfValidatorPass(array('required' => false)),
      'score'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('collection_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionCategory';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'parent_id' => 'Number',
      'name'      => 'Text',
      'slug'      => 'Text',
      'score'     => 'Number',
    );
  }
}
