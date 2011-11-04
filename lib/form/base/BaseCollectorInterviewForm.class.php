<?php

/**
 * CollectorInterview form base class.
 *
 * @method CollectorInterview getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectorInterviewForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'collector_id'           => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'collection_category_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionCategory', 'add_empty' => true)),
      'collection_id'          => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'title'                  => new sfWidgetFormInputText(),
      'catch_phrase'           => new sfWidgetFormInputText(),
      'is_active'              => new sfWidgetFormInputCheckbox(),
      'created_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id'           => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'collection_category_id' => new sfValidatorPropelChoice(array('model' => 'CollectionCategory', 'column' => 'id', 'required' => false)),
      'collection_id'          => new sfValidatorPropelChoice(array('model' => 'Collection', 'column' => 'id', 'required' => false)),
      'title'                  => new sfValidatorString(array('max_length' => 128)),
      'catch_phrase'           => new sfValidatorString(array('max_length' => 128)),
      'is_active'              => new sfValidatorBoolean(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collector_interview[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorInterview';
  }


}
