<?php

/**
 * wpTermTaxonomy form base class.
 *
 * @method wpTermTaxonomy getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpTermTaxonomyForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_taxonomy_id' => new sfWidgetFormInputHidden(),
      'term_id'          => new sfWidgetFormPropelChoice(array('model' => 'wpTerm', 'add_empty' => false)),
      'taxonomy'         => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'parent'           => new sfWidgetFormInputText(),
      'count'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'term_taxonomy_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getTermTaxonomyId()), 'empty_value' => $this->getObject()->getTermTaxonomyId(), 'required' => false)),
      'term_id'          => new sfValidatorPropelChoice(array('model' => 'wpTerm', 'column' => 'term_id')),
      'taxonomy'         => new sfValidatorString(array('max_length' => 32)),
      'description'      => new sfValidatorString(),
      'parent'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'count'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'wpTermTaxonomy', 'column' => array('term_id', 'taxonomy')))
    );

    $this->widgetSchema->setNameFormat('wp_term_taxonomy[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpTermTaxonomy';
  }


}
