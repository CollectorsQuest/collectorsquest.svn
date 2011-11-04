<?php

/**
 * CollectorProfile filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectorProfileFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id'    => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'collector_type'  => new sfWidgetFormFilterInput(),
      'birthday'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'gender'          => new sfWidgetFormFilterInput(),
      'zip_postal'      => new sfWidgetFormFilterInput(),
      'country'         => new sfWidgetFormFilterInput(),
      'country_iso3166' => new sfWidgetFormFilterInput(),
      'website'         => new sfWidgetFormFilterInput(),
      'about'           => new sfWidgetFormFilterInput(),
      'collections'     => new sfWidgetFormFilterInput(),
      'collecting'      => new sfWidgetFormFilterInput(),
      'most_spent'      => new sfWidgetFormFilterInput(),
      'anually_spent'   => new sfWidgetFormFilterInput(),
      'new_item_every'  => new sfWidgetFormFilterInput(),
      'interests'       => new sfWidgetFormFilterInput(),
      'is_featured'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_seller'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_image_auto'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'preferences'     => new sfWidgetFormFilterInput(),
      'notifications'   => new sfWidgetFormFilterInput(),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collector_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'collector_type'  => new sfValidatorPass(array('required' => false)),
      'birthday'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'gender'          => new sfValidatorPass(array('required' => false)),
      'zip_postal'      => new sfValidatorPass(array('required' => false)),
      'country'         => new sfValidatorPass(array('required' => false)),
      'country_iso3166' => new sfValidatorPass(array('required' => false)),
      'website'         => new sfValidatorPass(array('required' => false)),
      'about'           => new sfValidatorPass(array('required' => false)),
      'collections'     => new sfValidatorPass(array('required' => false)),
      'collecting'      => new sfValidatorPass(array('required' => false)),
      'most_spent'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'anually_spent'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'new_item_every'  => new sfValidatorPass(array('required' => false)),
      'interests'       => new sfValidatorPass(array('required' => false)),
      'is_featured'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_seller'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_image_auto'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'preferences'     => new sfValidatorPass(array('required' => false)),
      'notifications'   => new sfValidatorPass(array('required' => false)),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collector_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorProfile';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'collector_id'    => 'ForeignKey',
      'collector_type'  => 'Text',
      'birthday'        => 'Date',
      'gender'          => 'Text',
      'zip_postal'      => 'Text',
      'country'         => 'Text',
      'country_iso3166' => 'Text',
      'website'         => 'Text',
      'about'           => 'Text',
      'collections'     => 'Text',
      'collecting'      => 'Text',
      'most_spent'      => 'Number',
      'anually_spent'   => 'Number',
      'new_item_every'  => 'Text',
      'interests'       => 'Text',
      'is_featured'     => 'Boolean',
      'is_seller'       => 'Boolean',
      'is_image_auto'   => 'Boolean',
      'preferences'     => 'Text',
      'notifications'   => 'Text',
      'updated_at'      => 'Date',
      'created_at'      => 'Date',
    );
  }
}
