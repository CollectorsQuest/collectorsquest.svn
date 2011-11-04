<?php

/**
 * CollectorProfile form base class.
 *
 * @method CollectorProfile getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorProfileForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'collector_id'    => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'collector_type'  => new sfWidgetFormInputText(),
      'birthday'        => new sfWidgetFormDate(),
      'gender'          => new sfWidgetFormInputText(),
      'zip_postal'      => new sfWidgetFormInputText(),
      'country'         => new sfWidgetFormInputText(),
      'country_iso3166' => new sfWidgetFormInputText(),
      'website'         => new sfWidgetFormInputText(),
      'about'           => new sfWidgetFormTextarea(),
      'collections'     => new sfWidgetFormTextarea(),
      'collecting'      => new sfWidgetFormInputText(),
      'most_spent'      => new sfWidgetFormInputText(),
      'anually_spent'   => new sfWidgetFormInputText(),
      'new_item_every'  => new sfWidgetFormInputText(),
      'interests'       => new sfWidgetFormTextarea(),
      'is_featured'     => new sfWidgetFormInputCheckbox(),
      'is_seller'       => new sfWidgetFormInputCheckbox(),
      'is_image_auto'   => new sfWidgetFormInputCheckbox(),
      'preferences'     => new sfWidgetFormTextarea(),
      'notifications'   => new sfWidgetFormTextarea(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'created_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id'    => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'collector_type'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'birthday'        => new sfValidatorDate(array('required' => false)),
      'gender'          => new sfValidatorString(array('required' => false)),
      'zip_postal'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'country'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'country_iso3166' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'website'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'about'           => new sfValidatorString(array('required' => false)),
      'collections'     => new sfValidatorString(array('required' => false)),
      'collecting'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'most_spent'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'anually_spent'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'new_item_every'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'interests'       => new sfValidatorString(array('required' => false)),
      'is_featured'     => new sfValidatorBoolean(array('required' => false)),
      'is_seller'       => new sfValidatorBoolean(array('required' => false)),
      'is_image_auto'   => new sfValidatorBoolean(),
      'preferences'     => new sfValidatorString(array('required' => false)),
      'notifications'   => new sfValidatorString(array('required' => false)),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectorProfile', 'column' => array('collector_id')))
    );

    $this->widgetSchema->setNameFormat('collector_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorProfile';
  }


}
