<?php

/**
 * wpTermRelationship filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BasewpTermRelationshipFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('wp_term_relationship_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpTermRelationship';
  }

  public function getFields()
  {
    return array(
      'object_id'        => 'Number',
      'term_taxonomy_id' => 'Number',
    );
  }
}
