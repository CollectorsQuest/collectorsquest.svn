<?php

/**
 * Score filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseScoreFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'day'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'model'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'model_id'   => new sfWidgetFormFilterInput(),
      'views'      => new sfWidgetFormFilterInput(),
      'ratings'    => new sfWidgetFormFilterInput(),
      'score'      => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'day'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'model'      => new sfValidatorPass(array('required' => false)),
      'model_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'views'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ratings'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'score'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('score_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Score';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'day'        => 'Date',
      'model'      => 'Text',
      'model_id'   => 'Number',
      'views'      => 'Number',
      'ratings'    => 'Number',
      'score'      => 'Number',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
