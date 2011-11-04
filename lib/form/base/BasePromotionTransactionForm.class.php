<?php

/**
 * PromotionTransaction form base class.
 *
 * @method PromotionTransaction getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasePromotionTransactionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'promotion_id' => new sfWidgetFormPropelChoice(array('model' => 'Promotion', 'add_empty' => false)),
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'amount'       => new sfWidgetFormInputText(),
      'amount_type'  => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'PromotionTransaction', 'column' => 'id', 'required' => false)),
      'promotion_id' => new sfValidatorPropelChoice(array('model' => 'Promotion', 'column' => 'id')),
      'collector_id' => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'amount'       => new sfValidatorNumber(array('required' => false)),
      'amount_type'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('promotion_transaction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PromotionTransaction';
  }


}
