<?php

/**
 * PackageTransaction filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BasePackageTransactionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id'       => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'package_id'         => new sfWidgetFormPropelChoice(array('model' => 'Package', 'add_empty' => true)),
      'max_items_for_sale' => new sfWidgetFormFilterInput(),
      'package_price'      => new sfWidgetFormFilterInput(),
      'expiry_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'payment_status'     => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collector_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'package_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Package', 'column' => 'id')),
      'max_items_for_sale' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'package_price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'expiry_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'payment_status'     => new sfValidatorPass(array('required' => false)),
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
      'collector_id'       => 'ForeignKey',
      'package_id'         => 'ForeignKey',
      'max_items_for_sale' => 'Number',
      'package_price'      => 'Number',
      'expiry_date'        => 'Date',
      'payment_status'     => 'Text',
      'created_at'         => 'Date',
    );
  }
}
