<?php

/**
 * CollectorEmail filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectorEmailFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'email'        => new sfWidgetFormFilterInput(),
      'hash'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salt'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_verified'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collector_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'email'        => new sfValidatorPass(array('required' => false)),
      'hash'         => new sfValidatorPass(array('required' => false)),
      'salt'         => new sfValidatorPass(array('required' => false)),
      'is_verified'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collector_email_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorEmail';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'collector_id' => 'ForeignKey',
      'email'        => 'Text',
      'hash'         => 'Text',
      'salt'         => 'Text',
      'is_verified'  => 'Boolean',
      'updated_at'   => 'Date',
      'created_at'   => 'Date',
    );
  }
}
