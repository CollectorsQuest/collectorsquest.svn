<?php

/**
 * PackageTransaction filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasePackageTransactionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'package_id'         => new sfWidgetFormPropelChoice(array('model' => 'Package', 'add_empty' => true)),
      'collector_id'       => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'payment_status'     => new sfWidgetFormFilterInput(),
      'max_items_for_sale' => new sfWidgetFormFilterInput(),
      'package_price'      => new sfWidgetFormFilterInput(),
      'expiry_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'package_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Package', 'column' => 'id')),
      'collector_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'payment_status'     => new sfValidatorPass(array('required' => false)),
      'max_items_for_sale' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'package_price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'expiry_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('package_transaction_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PackageTransaction';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'package_id'         => 'ForeignKey',
      'collector_id'       => 'ForeignKey',
      'payment_status'     => 'Text',
      'max_items_for_sale' => 'Number',
      'package_price'      => 'Number',
      'expiry_date'        => 'Date',
      'created_at'         => 'Date',
    );
  }
}
