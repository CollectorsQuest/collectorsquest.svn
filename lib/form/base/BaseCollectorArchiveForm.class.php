<?php

/**
 * CollectorArchive form base class.
 *
 * @method CollectorArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'facebook_id'         => new sfWidgetFormInputText(),
      'username'            => new sfWidgetFormInputText(),
      'display_name'        => new sfWidgetFormInputText(),
      'slug'                => new sfWidgetFormInputText(),
      'sha1_password'       => new sfWidgetFormInputText(),
      'salt'                => new sfWidgetFormInputText(),
      'score'               => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'user_type'           => new sfWidgetFormInputText(),
      'items_allowed'       => new sfWidgetFormInputText(),
      'what_you_collect'    => new sfWidgetFormInputText(),
      'purchases_per_year'  => new sfWidgetFormInputText(),
      'what_you_sell'       => new sfWidgetFormInputText(),
      'annually_spend'      => new sfWidgetFormInputText(),
      'most_expensive_item' => new sfWidgetFormInputText(),
      'company'             => new sfWidgetFormInputText(),
      'is_public'           => new sfWidgetFormInputCheckbox(),
      'session_id'          => new sfWidgetFormInputText(),
      'last_seen_at'        => new sfWidgetFormDateTime(),
      'archived_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'facebook_id'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'username'            => new sfValidatorString(array('max_length' => 64)),
      'display_name'        => new sfValidatorString(array('max_length' => 64)),
      'slug'                => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'sha1_password'       => new sfValidatorString(array('max_length' => 40)),
      'salt'                => new sfValidatorString(array('max_length' => 32)),
      'score'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'email'               => new sfValidatorString(array('max_length' => 128)),
      'user_type'           => new sfValidatorString(),
      'items_allowed'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'what_you_collect'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'purchases_per_year'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'what_you_sell'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'annually_spend'      => new sfValidatorNumber(array('required' => false)),
      'most_expensive_item' => new sfValidatorNumber(array('required' => false)),
      'company'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_public'           => new sfValidatorBoolean(array('required' => false)),
      'session_id'          => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'last_seen_at'        => new sfValidatorDateTime(array('required' => false)),
      'archived_at'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectorArchive', 'column' => array('facebook_id')))
    );

    $this->widgetSchema->setNameFormat('collector_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorArchive';
  }


}
