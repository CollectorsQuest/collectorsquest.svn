<?php

/**
 * Package filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasePackageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'plan_type'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'package_name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'package_description' => new sfWidgetFormFilterInput(),
      'max_items_for_sale'  => new sfWidgetFormFilterInput(),
      'package_price'       => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'plan_type'           => new sfValidatorPass(array('required' => false)),
      'package_name'        => new sfValidatorPass(array('required' => false)),
      'package_description' => new sfValidatorPass(array('required' => false)),
      'max_items_for_sale'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'package_price'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('package_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Package';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'plan_type'           => 'Text',
      'package_name'        => 'Text',
      'package_description' => 'Text',
      'max_items_for_sale'  => 'Number',
      'package_price'       => 'Number',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
