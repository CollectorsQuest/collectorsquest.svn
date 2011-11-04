<?php

/**
 * Queue form base class.
 *
 * @method Queue getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseQueueForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'queue_id'   => new sfWidgetFormInputHidden(),
      'queue_name' => new sfWidgetFormInputText(),
      'timeout'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'queue_id'   => new sfValidatorPropelChoice(array('model' => 'Queue', 'column' => 'queue_id', 'required' => false)),
      'queue_name' => new sfValidatorString(array('max_length' => 100)),
      'timeout'    => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
    ));

    $this->widgetSchema->setNameFormat('queue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Queue';
  }


}
