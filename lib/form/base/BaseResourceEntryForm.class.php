<?php

/**
 * ResourceEntry form base class.
 *
 * @method ResourceEntry getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseResourceEntryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'category_id' => new sfWidgetFormPropelChoice(array('model' => 'ResourceCategory', 'add_empty' => false)),
      'type'        => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'slug'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'url'         => new sfWidgetFormInputText(),
      'rss'         => new sfWidgetFormInputText(),
      'thumbnail'   => new sfWidgetFormInputText(),
      'blogger'     => new sfWidgetFormInputText(),
      'email'       => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'ResourceEntry', 'column' => 'id', 'required' => false)),
      'category_id' => new sfValidatorPropelChoice(array('model' => 'ResourceCategory', 'column' => 'id')),
      'type'        => new sfValidatorString(array('max_length' => 24)),
      'name'        => new sfValidatorString(array('max_length' => 128)),
      'slug'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description' => new sfValidatorString(),
      'url'         => new sfValidatorString(array('max_length' => 255)),
      'rss'         => new sfValidatorString(array('max_length' => 255)),
      'thumbnail'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'blogger'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'email'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resource_entry[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceEntry';
  }


}
