<?php

/**
 * Video form base class.
 *
 * @method Video getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseVideoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'slug'         => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'type'         => new sfWidgetFormInputText(),
      'length'       => new sfWidgetFormInputText(),
      'filename'     => new sfWidgetFormInputText(),
      'thumb_small'  => new sfWidgetFormInputText(),
      'thumb_large'  => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'published_at' => new sfWidgetFormDateTime(),
      'uploaded_at'  => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Video', 'column' => 'id', 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 64)),
      'slug'         => new sfValidatorString(array('max_length' => 64)),
      'description'  => new sfValidatorString(),
      'type'         => new sfValidatorString(array('max_length' => 64)),
      'length'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'filename'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'thumb_small'  => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'thumb_large'  => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'published_at' => new sfValidatorDateTime(array('required' => false)),
      'uploaded_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('video[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Video';
  }


}
