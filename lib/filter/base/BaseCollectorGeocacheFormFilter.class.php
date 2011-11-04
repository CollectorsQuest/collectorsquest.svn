<?php

/**
 * CollectorGeocache filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectorGeocacheFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id'    => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'country'         => new sfWidgetFormFilterInput(),
      'country_iso3166' => new sfWidgetFormFilterInput(),
      'state'           => new sfWidgetFormFilterInput(),
      'county'          => new sfWidgetFormFilterInput(),
      'city'            => new sfWidgetFormFilterInput(),
      'zip_postal'      => new sfWidgetFormFilterInput(),
      'address'         => new sfWidgetFormFilterInput(),
      'latitude'        => new sfWidgetFormFilterInput(),
      'longitude'       => new sfWidgetFormFilterInput(),
      'timezone'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'collector_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'country'         => new sfValidatorPass(array('required' => false)),
      'country_iso3166' => new sfValidatorPass(array('required' => false)),
      'state'           => new sfValidatorPass(array('required' => false)),
      'county'          => new sfValidatorPass(array('required' => false)),
      'city'            => new sfValidatorPass(array('required' => false)),
      'zip_postal'      => new sfValidatorPass(array('required' => false)),
      'address'         => new sfValidatorPass(array('required' => false)),
      'latitude'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'timezone'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collector_geocache_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorGeocache';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'collector_id'    => 'ForeignKey',
      'country'         => 'Text',
      'country_iso3166' => 'Text',
      'state'           => 'Text',
      'county'          => 'Text',
      'city'            => 'Text',
      'zip_postal'      => 'Text',
      'address'         => 'Text',
      'latitude'        => 'Number',
      'longitude'       => 'Number',
      'timezone'        => 'Text',
    );
  }
}
