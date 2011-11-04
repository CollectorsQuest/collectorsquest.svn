<?php

/**
 * CollectionItem filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectionItemFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collection_id'   => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'            => new sfWidgetFormFilterInput(),
      'description'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'est_value'       => new sfWidgetFormFilterInput(),
      'purchased_price' => new sfWidgetFormFilterInput(),
      'currency'        => new sfWidgetFormFilterInput(),
      'photo'           => new sfWidgetFormFilterInput(),
      'is_for_sale'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'num_views'       => new sfWidgetFormFilterInput(),
      'position'        => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collection_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collection', 'column' => 'id')),
      'name'            => new sfValidatorPass(array('required' => false)),
      'slug'            => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'est_value'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'purchased_price' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'currency'        => new sfValidatorPass(array('required' => false)),
      'photo'           => new sfValidatorPass(array('required' => false)),
      'is_for_sale'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'num_views'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collection_item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionItem';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'collection_id'   => 'ForeignKey',
      'name'            => 'Text',
      'slug'            => 'Text',
      'description'     => 'Text',
      'est_value'       => 'Number',
      'purchased_price' => 'Number',
      'currency'        => 'Text',
      'photo'           => 'Text',
      'is_for_sale'     => 'Boolean',
      'num_views'       => 'Number',
      'position'        => 'Number',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
