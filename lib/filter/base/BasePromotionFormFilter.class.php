<?php

/**
 * Promotion filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasePromotionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'promotion_name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'promotion_desc'  => new sfWidgetFormFilterInput(),
      'promotion_code'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'amount'          => new sfWidgetFormFilterInput(),
      'amount_type'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'no_of_time_used' => new sfWidgetFormFilterInput(),
      'expiry_date'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'promotion_name'  => new sfValidatorPass(array('required' => false)),
      'promotion_desc'  => new sfValidatorPass(array('required' => false)),
      'promotion_code'  => new sfValidatorPass(array('required' => false)),
      'amount'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'amount_type'     => new sfValidatorPass(array('required' => false)),
      'no_of_time_used' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expiry_date'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('promotion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promotion';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'promotion_name'  => 'Text',
      'promotion_desc'  => 'Text',
      'promotion_code'  => 'Text',
      'amount'          => 'Number',
      'amount_type'     => 'Text',
      'no_of_time_used' => 'Number',
      'expiry_date'     => 'Date',
      'updated_at'      => 'Date',
      'created_at'      => 'Date',
    );
  }
}
