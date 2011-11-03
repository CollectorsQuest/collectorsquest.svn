<?php

/**
 * ResourceEntry filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseResourceEntryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id' => new sfWidgetFormPropelChoice(array('model' => 'ResourceCategory', 'add_empty' => true)),
      'type'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'        => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rss'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'thumbnail'   => new sfWidgetFormFilterInput(),
      'blogger'     => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'category_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'ResourceCategory', 'column' => 'id')),
      'type'        => new sfValidatorPass(array('required' => false)),
      'name'        => new sfValidatorPass(array('required' => false)),
      'slug'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'url'         => new sfValidatorPass(array('required' => false)),
      'rss'         => new sfValidatorPass(array('required' => false)),
      'thumbnail'   => new sfValidatorPass(array('required' => false)),
      'blogger'     => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('resource_entry_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceEntry';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'category_id' => 'ForeignKey',
      'type'        => 'Text',
      'name'        => 'Text',
      'slug'        => 'Text',
      'description' => 'Text',
      'url'         => 'Text',
      'rss'         => 'Text',
      'thumbnail'   => 'Text',
      'blogger'     => 'Text',
      'email'       => 'Text',
      'created_at'  => 'Date',
    );
  }
}
