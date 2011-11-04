<?php

/**
 * TermRelationship form base class.
 *
 * @method TermRelationship getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseTermRelationshipForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'term_id'  => new sfWidgetFormPropelChoice(array('model' => 'Term', 'add_empty' => true)),
      'model'    => new sfWidgetFormInputText(),
      'model_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(array('model' => 'TermRelationship', 'column' => 'id', 'required' => false)),
      'term_id'  => new sfValidatorPropelChoice(array('model' => 'Term', 'column' => 'id', 'required' => false)),
      'model'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'model_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('term_relationship[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TermRelationship';
  }


}
