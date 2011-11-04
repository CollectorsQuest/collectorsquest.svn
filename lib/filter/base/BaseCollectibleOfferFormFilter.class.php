<?php

/**
 * CollectibleOffer filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectibleOfferFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collectible_id'          => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => true)),
      'collectible_for_sale_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectibleForSale', 'add_empty' => true)),
      'collector_id'            => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'price'                   => new sfWidgetFormFilterInput(),
      'status'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deleted_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collectible_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collectible', 'column' => 'id')),
      'collectible_for_sale_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectibleForSale', 'column' => 'id')),
      'collector_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'price'                   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'                  => new sfValidatorPass(array('required' => false)),
      'deleted_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collectible_offer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleOffer';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'collectible_id'          => 'ForeignKey',
      'collectible_for_sale_id' => 'ForeignKey',
      'collector_id'            => 'ForeignKey',
      'price'                   => 'Number',
      'status'                  => 'Text',
      'deleted_at'              => 'Date',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}
