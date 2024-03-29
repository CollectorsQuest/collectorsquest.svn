<?php

/**
 * Collector form base class.
 *
 * @method Collector getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'graph_id'            => new sfWidgetFormInputText(),
      'facebook_id'         => new sfWidgetFormInputText(),
      'username'            => new sfWidgetFormInputText(),
      'display_name'        => new sfWidgetFormInputText(),
      'slug'                => new sfWidgetFormInputText(),
      'sha1_password'       => new sfWidgetFormInputText(),
      'salt'                => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'user_type'           => new sfWidgetFormInputText(),
      'items_allowed'       => new sfWidgetFormInputText(),
      'what_you_collect'    => new sfWidgetFormInputText(),
      'purchases_per_year'  => new sfWidgetFormInputText(),
      'what_you_sell'       => new sfWidgetFormInputText(),
      'annually_spend'      => new sfWidgetFormInputText(),
      'most_expensive_item' => new sfWidgetFormInputText(),
      'company'             => new sfWidgetFormInputText(),
      'locale'              => new sfWidgetFormInputText(),
      'score'               => new sfWidgetFormInputText(),
      'spam_score'          => new sfWidgetFormInputText(),
      'is_spam'             => new sfWidgetFormInputCheckbox(),
      'is_public'           => new sfWidgetFormInputCheckbox(),
      'session_id'          => new sfWidgetFormInputText(),
      'last_seen_at'        => new sfWidgetFormDateTime(),
      'eblob'               => new sfWidgetFormTextarea(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'graph_id'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'facebook_id'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'username'            => new sfValidatorString(array('max_length' => 64)),
      'display_name'        => new sfValidatorString(array('max_length' => 64)),
      'slug'                => new sfValidatorString(array('max_length' => 64)),
      'sha1_password'       => new sfValidatorString(array('max_length' => 40)),
      'salt'                => new sfValidatorString(array('max_length' => 32)),
      'email'               => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'user_type'           => new sfValidatorString(),
      'items_allowed'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'what_you_collect'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'purchases_per_year'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'what_you_sell'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'annually_spend'      => new sfValidatorNumber(array('required' => false)),
      'most_expensive_item' => new sfValidatorNumber(array('required' => false)),
      'company'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'locale'              => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'score'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'spam_score'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'is_spam'             => new sfValidatorBoolean(array('required' => false)),
      'is_public'           => new sfValidatorBoolean(array('required' => false)),
      'session_id'          => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'last_seen_at'        => new sfValidatorDateTime(array('required' => false)),
      'eblob'               => new sfValidatorString(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(array('required' => false)),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Collector', 'column' => array('graph_id'))),
        new sfValidatorPropelUnique(array('model' => 'Collector', 'column' => array('facebook_id'))),
        new sfValidatorPropelUnique(array('model' => 'Collector', 'column' => array('slug'))),
        new sfValidatorPropelUnique(array('model' => 'Collector', 'column' => array('email'))),
      ))
    );

    $this->widgetSchema->setNameFormat('collector[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Collector';
  }


}
