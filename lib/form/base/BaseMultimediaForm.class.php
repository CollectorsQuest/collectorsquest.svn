<?php

/**
 * Multimedia form base class.
 *
 * @method Multimedia getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseMultimediaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'model'       => new sfWidgetFormInputText(),
      'model_id'    => new sfWidgetFormInputText(),
      'type'        => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'md5'         => new sfWidgetFormInputText(),
      'colors'      => new sfWidgetFormInputText(),
      'orientation' => new sfWidgetFormInputText(),
      'source'      => new sfWidgetFormInputText(),
      'is_primary'  => new sfWidgetFormInputCheckbox(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Multimedia', 'column' => 'id', 'required' => false)),
      'model'       => new sfValidatorString(array('max_length' => 64)),
      'model_id'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'type'        => new sfValidatorString(),
      'name'        => new sfValidatorString(array('max_length' => 128)),
      'md5'         => new sfValidatorString(array('max_length' => 32)),
      'colors'      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'orientation' => new sfValidatorString(array('required' => false)),
      'source'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_primary'  => new sfValidatorBoolean(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Multimedia', 'column' => array('model', 'model_id', 'md5')))
    );

    $this->widgetSchema->setNameFormat('multimedia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Multimedia';
  }


}
