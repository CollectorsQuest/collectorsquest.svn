<?php

/**
 * CollectorGeocacheArchive form base class.
 *
 * @method CollectorGeocacheArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorGeocacheArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'collector_id'    => new sfWidgetFormInputText(),
      'country'         => new sfWidgetFormInputText(),
      'country_iso3166' => new sfWidgetFormInputText(),
      'state'           => new sfWidgetFormInputText(),
      'county'          => new sfWidgetFormInputText(),
      'city'            => new sfWidgetFormInputText(),
      'zip_postal'      => new sfWidgetFormInputText(),
      'address'         => new sfWidgetFormInputText(),
      'latitude'        => new sfWidgetFormInputText(),
      'longitude'       => new sfWidgetFormInputText(),
      'timezone'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'country'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'country_iso3166' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'state'           => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'county'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'city'            => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'zip_postal'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'address'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'latitude'        => new sfValidatorNumber(array('required' => false)),
      'longitude'       => new sfValidatorNumber(array('required' => false)),
      'timezone'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collector_geocache_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorGeocacheArchive';
  }


}
