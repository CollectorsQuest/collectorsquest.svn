<?php

/**
 * Featured filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseFeaturedFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'featured_type_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'featured_model'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'featured_id'      => new sfWidgetFormFilterInput(),
      'tree_left'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tree_right'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tree_scope'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'eblob'            => new sfWidgetFormFilterInput(),
      'start_date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'position'         => new sfWidgetFormFilterInput(),
      'is_active'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'featured_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'featured_model'   => new sfValidatorPass(array('required' => false)),
      'featured_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_left'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_right'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_scope'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'eblob'            => new sfValidatorPass(array('required' => false)),
      'start_date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'end_date'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'position'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_active'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('featured_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Featured';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'featured_type_id' => 'Number',
      'featured_model'   => 'Text',
      'featured_id'      => 'Number',
      'tree_left'        => 'Number',
      'tree_right'       => 'Number',
      'tree_scope'       => 'Number',
      'eblob'            => 'Text',
      'start_date'       => 'Date',
      'end_date'         => 'Date',
      'position'         => 'Number',
      'is_active'        => 'Boolean',
    );
  }
}
