<?php

/**
 * PromotionTransaction filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasePromotionTransactionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'promotion_id' => new sfWidgetFormPropelChoice(array('model' => 'Promotion', 'add_empty' => true)),
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'amount'       => new sfWidgetFormFilterInput(),
      'amount_type'  => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'promotion_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Promotion', 'column' => 'id')),
      'collector_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'amount'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'amount_type'  => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('promotion_transaction_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PromotionTransaction';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'promotion_id' => 'ForeignKey',
      'collector_id' => 'ForeignKey',
      'amount'       => 'Number',
      'amount_type'  => 'Text',
      'created_at'   => 'Date',
    );
  }
}
