<?php

/**
 * CollectibleForSaleArchive filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectibleForSaleArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collectible_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'price'               => new sfWidgetFormFilterInput(),
      'condition'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_price_negotiable' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_shipping_free'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_sold'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_ready'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'quantity'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'archived_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collectible_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'condition'           => new sfValidatorPass(array('required' => false)),
      'is_price_negotiable' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_shipping_free'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_sold'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_ready'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'quantity'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'archived_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collectible_for_sale_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleForSaleArchive';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'collectible_id'      => 'Number',
      'price'               => 'Number',
      'condition'           => 'Text',
      'is_price_negotiable' => 'Boolean',
      'is_shipping_free'    => 'Boolean',
      'is_sold'             => 'Boolean',
      'is_ready'            => 'Boolean',
      'quantity'            => 'Number',
      'archived_at'         => 'Date',
    );
  }
}
