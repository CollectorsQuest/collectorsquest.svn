<?php

/**
 * CollectionItemOffer filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectionItemOfferFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'item_id'          => new sfWidgetFormPropelChoice(array('model' => 'CollectionItem', 'add_empty' => true)),
      'item_for_sale_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionItemForSale', 'add_empty' => true)),
      'collector_id'     => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'price'            => new sfWidgetFormFilterInput(),
      'status'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'item_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectionItem', 'column' => 'id')),
      'item_for_sale_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectionItemForSale', 'column' => 'id')),
      'collector_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'price'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'           => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collection_item_offer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionItemOffer';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'item_id'          => 'ForeignKey',
      'item_for_sale_id' => 'ForeignKey',
      'collector_id'     => 'ForeignKey',
      'price'            => 'Number',
      'status'           => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
