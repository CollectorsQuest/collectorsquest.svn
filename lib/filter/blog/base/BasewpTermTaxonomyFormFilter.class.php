<?php

/**
 * wpTermTaxonomy filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BasewpTermTaxonomyFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_id'          => new sfWidgetFormFilterInput(),
      'taxonomy'         => new sfWidgetFormFilterInput(),
      'description'      => new sfWidgetFormFilterInput(),
      'parent'           => new sfWidgetFormFilterInput(),
      'count'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'term_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'term_id'          => 'Number',
      'taxonomy'         => 'Text',
      'description'      => 'Text',
      'parent'           => 'Number',
      'count'            => 'Number',
    );
  }
}
