<?php

/**
 * CollectionItemForSale filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseCollectionItemForSaleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'item_id'             => new sfWidgetFormPropelChoice(array('model' => 'CollectionItem', 'add_empty' => true)),
      'price'               => new sfWidgetFormFilterInput(),
      'condition'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_price_negotiable' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_shipping_free'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_sold'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'item_id'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectionItem', 'column' => 'id')),
      'price'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'condition'           => new sfValidatorPass(array('required' => false)),
      'is_price_negotiable' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_shipping_free'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_sold'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collection_item_for_sale_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionItemForSale';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'item_id'             => 'ForeignKey',
      'price'               => 'Number',
      'condition'           => 'Text',
      'is_price_negotiable' => 'Boolean',
      'is_shipping_free'    => 'Boolean',
      'is_sold'             => 'Boolean',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
