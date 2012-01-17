<?php

/**
 * CollectibleOfferArchive filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectibleOfferArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collectible_id'          => new sfWidgetFormFilterInput(),
      'collectible_for_sale_id' => new sfWidgetFormFilterInput(),
      'collector_id'            => new sfWidgetFormFilterInput(),
      'price'                   => new sfWidgetFormFilterInput(),
      'status'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'archived_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collectible_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collectible_for_sale_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collector_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'                   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'                  => new sfValidatorPass(array('required' => false)),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'archived_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collectible_offer_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleOfferArchive';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'collectible_id'          => 'Number',
      'collectible_for_sale_id' => 'Number',
      'collector_id'            => 'Number',
      'price'                   => 'Number',
      'status'                  => 'Text',
      'updated_at'              => 'Date',
      'created_at'              => 'Date',
      'archived_at'             => 'Date',
    );
  }
}
