<?php

/**
 * wpTerm filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpTermFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(),
      'slug'       => new sfWidgetFormFilterInput(),
      'term_group' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'slug'       => new sfValidatorPass(array('required' => false)),
      'term_group' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('wp_term_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpTerm';
  }

  public function getFields()
  {
    return array(
      'term_id'    => 'Number',
      'name'       => 'Text',
      'slug'       => 'Text',
      'term_group' => 'Number',
    );
  }
}
