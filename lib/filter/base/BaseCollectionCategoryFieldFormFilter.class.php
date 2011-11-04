<?php

/**
 * CollectionCategoryField filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectionCategoryFieldFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collection_category_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionCategory', 'add_empty' => true)),
      'custom_field_id'        => new sfWidgetFormPropelChoice(array('model' => 'CustomField', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'collection_category_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectionCategory', 'column' => 'id')),
      'custom_field_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CustomField', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('collection_category_field_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionCategoryField';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'collection_category_id' => 'ForeignKey',
      'custom_field_id'        => 'ForeignKey',
    );
  }
}
