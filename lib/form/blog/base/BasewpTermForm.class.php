<?php

/**
 * wpTerm form base class.
 *
 * @method wpTerm getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpTermForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_id'    => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'slug'       => new sfWidgetFormInputText(),
      'term_group' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'term_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getTermId()), 'empty_value' => $this->getObject()->getTermId(), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 55)),
      'slug'       => new sfValidatorString(array('max_length' => 200)),
      'term_group' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'wpTerm', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('wp_term[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpTerm';
  }


}
