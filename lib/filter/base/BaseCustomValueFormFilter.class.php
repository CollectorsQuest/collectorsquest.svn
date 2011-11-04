<?php

/**
 * CustomValue filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCustomValueFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collection_id'  => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'collectible_id' => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => true)),
      'field_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value_text'     => new sfWidgetFormFilterInput(),
      'value_date'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'value_numeric'  => new sfWidgetFormFilterInput(),
      'value_bool'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collection_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collection', 'column' => 'id')),
      'collectible_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collectible', 'column' => 'id')),
      'field_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'value_text'     => new sfValidatorPass(array('required' => false)),
      'value_date'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'value_numeric'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'value_bool'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('custom_value_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CustomValue';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'collection_id'  => 'ForeignKey',
      'collectible_id' => 'ForeignKey',
      'field_id'       => 'Number',
      'value_text'     => 'Text',
      'value_date'     => 'Date',
      'value_numeric'  => 'Number',
      'value_bool'     => 'Boolean',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
