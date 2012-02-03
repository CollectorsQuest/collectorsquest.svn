<?php

/**
 * wpTermTaxonomy filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpTermTaxonomyFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_id'          => new sfWidgetFormPropelChoice(array('model' => 'wpTerm', 'add_empty' => true)),
      'taxonomy'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'parent'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'count'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'term_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpTerm', 'column' => 'term_id')),
      'taxonomy'         => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'parent'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'count'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('wp_term_taxonomy_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpTermTaxonomy';
  }

  public function getFields()
  {
    return array(
      'term_taxonomy_id' => 'Number',
      'term_id'          => 'ForeignKey',
      'taxonomy'         => 'Text',
      'description'      => 'Text',
      'parent'           => 'Number',
      'count'            => 'Number',
    );
  }
}
