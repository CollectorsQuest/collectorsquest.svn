<?php

/**
 * SessionStorage filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseSessionStorageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'session_id'   => new sfWidgetFormFilterInput(),
      'session_data' => new sfWidgetFormFilterInput(),
      'session_time' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'session_id'   => new sfValidatorPass(array('required' => false)),
      'session_data' => new sfValidatorPass(array('required' => false)),
      'session_time' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('session_storage_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SessionStorage';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'session_id'   => 'Text',
      'session_data' => 'Text',
      'session_time' => 'Number',
    );
  }
}
