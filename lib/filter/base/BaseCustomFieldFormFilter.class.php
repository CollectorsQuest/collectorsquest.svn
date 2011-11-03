<?php

/**
 * CustomField filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseCustomFieldFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'object'     => new sfWidgetFormFilterInput(),
      'validation' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'type'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'object'     => new sfValidatorPass(array('required' => false)),
      'validation' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('custom_field_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CustomField';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'type'       => 'Number',
      'object'     => 'Text',
      'validation' => 'Text',
    );
  }
}
