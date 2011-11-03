<?php

/**
 * Score form base class.
 *
 * @method Score getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseScoreForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'day'        => new sfWidgetFormDate(),
      'model'      => new sfWidgetFormInputText(),
      'model_id'   => new sfWidgetFormInputText(),
      'views'      => new sfWidgetFormInputText(),
      'ratings'    => new sfWidgetFormInputText(),
      'score'      => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Score', 'column' => 'id', 'required' => false)),
      'day'        => new sfValidatorDate(array('required' => false)),
      'model'      => new sfValidatorString(array('max_length' => 64)),
      'model_id'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'views'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'ratings'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'score'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Score', 'column' => array('day', 'model', 'model_id')))
    );

    $this->widgetSchema->setNameFormat('score[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Score';
  }


}
