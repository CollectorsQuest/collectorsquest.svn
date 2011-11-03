<?php

/**
 * ResourceCategory form base class.
 *
 * @method ResourceCategory getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseResourceCategoryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'slug'       => new sfWidgetFormInputText(),
      'thumbnail'  => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'ResourceCategory', 'column' => 'id', 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 128)),
      'slug'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'thumbnail'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resource_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceCategory';
  }


}
