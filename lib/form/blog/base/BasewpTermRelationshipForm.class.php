<?php

/**
 * wpTermRelationship form base class.
 *
 * @method wpTermRelationship getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpTermRelationshipForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'object_id'        => new sfWidgetFormInputHidden(),
      'term_taxonomy_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'object_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getObjectId()), 'empty_value' => $this->getObject()->getObjectId(), 'required' => false)),
      'term_taxonomy_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getTermTaxonomyId()), 'empty_value' => $this->getObject()->getTermTaxonomyId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_term_relationship[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpTermRelationship';
  }


}
