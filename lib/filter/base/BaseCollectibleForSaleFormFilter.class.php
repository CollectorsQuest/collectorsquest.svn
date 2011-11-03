<?php

/**
 * CollectibleForSale filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseCollectibleForSaleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collectible_id'      => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => true)),
      'price'               => new sfWidgetFormFilterInput(),
      'condition'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_price_negotiable' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_shipping_free'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_sold'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_ready'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'quantity'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deleted_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collectible_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collectible', 'column' => 'id')),
      'price'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'condition'           => new sfValidatorPass(array('required' => false)),
      'is_price_negotiable' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_shipping_free'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_sold'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_ready'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'quantity'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'deleted_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collectible_for_sale_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleForSale';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'collectible_id'      => 'ForeignKey',
      'price'               => 'Number',
      'condition'           => 'Text',
      'is_price_negotiable' => 'Boolean',
      'is_shipping_free'    => 'Boolean',
      'is_sold'             => 'Boolean',
      'is_ready'            => 'Boolean',
      'quantity'            => 'Number',
      'deleted_at'          => 'Date',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
