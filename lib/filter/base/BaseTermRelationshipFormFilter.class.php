<?php

/**
 * TermRelationship filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseTermRelationshipFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_id'  => new sfWidgetFormPropelChoice(array('model' => 'Term', 'add_empty' => true)),
      'model'    => new sfWidgetFormFilterInput(),
      'model_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'term_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Term', 'column' => 'id')),
      'model'    => new sfValidatorPass(array('required' => false)),
      'model_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('term_relationship_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TermRelationship';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'term_id'  => 'ForeignKey',
      'model'    => 'Text',
      'model_id' => 'Number',
    );
  }
}
