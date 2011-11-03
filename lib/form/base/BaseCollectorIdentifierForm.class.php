<?php

/**
 * CollectorIdentifier form base class.
 *
 * @method CollectorIdentifier getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseCollectorIdentifierForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'collector_id' => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'identifier'   => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'CollectorIdentifier', 'column' => 'id', 'required' => false)),
      'collector_id' => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'identifier'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectorIdentifier', 'column' => array('collector_id', 'identifier')))
    );

    $this->widgetSchema->setNameFormat('collector_identifier[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorIdentifier';
  }


}
