<?php

/**
 * Queue filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseQueueFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'queue_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'timeout'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'queue_name' => new sfValidatorPass(array('required' => false)),
      'timeout'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('queue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Queue';
  }

  public function getFields()
  {
    return array(
      'queue_id'   => 'Number',
      'queue_name' => 'Text',
      'timeout'    => 'Number',
    );
  }
}
