<?php

/**
 * InterviewQuestion form base class.
 *
 * @method InterviewQuestion getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseInterviewQuestionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'collector_interview_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectorInterview', 'add_empty' => false)),
      'question'               => new sfWidgetFormInputText(),
      'answer'                 => new sfWidgetFormTextarea(),
      'photo'                  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorPropelChoice(array('model' => 'InterviewQuestion', 'column' => 'id', 'required' => false)),
      'collector_interview_id' => new sfValidatorPropelChoice(array('model' => 'CollectorInterview', 'column' => 'id')),
      'question'               => new sfValidatorString(array('max_length' => 128)),
      'answer'                 => new sfValidatorString(),
      'photo'                  => new sfValidatorString(array('max_length' => 128, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('interview_question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'InterviewQuestion';
  }


}
