<?php

/**
 * Promotion form base class.
 *
 * @method Promotion getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasePromotionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'promotion_name'  => new sfWidgetFormInputText(),
      'promotion_desc'  => new sfWidgetFormTextarea(),
      'promotion_code'  => new sfWidgetFormInputText(),
      'amount'          => new sfWidgetFormInputText(),
      'amount_type'     => new sfWidgetFormInputText(),
      'no_of_time_used' => new sfWidgetFormInputText(),
      'expiry_date'     => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'created_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'promotion_name'  => new sfValidatorString(array('max_length' => 255)),
      'promotion_desc'  => new sfValidatorString(array('required' => false)),
      'promotion_code'  => new sfValidatorString(array('max_length' => 255)),
      'amount'          => new sfValidatorNumber(array('required' => false)),
      'amount_type'     => new sfValidatorString(),
      'no_of_time_used' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'expiry_date'     => new sfValidatorDateTime(array('required' => false)),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Promotion', 'column' => array('promotion_code')))
    );

    $this->widgetSchema->setNameFormat('promotion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promotion';
  }


}
