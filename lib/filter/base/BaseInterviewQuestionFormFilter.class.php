<?php

/**
 * InterviewQuestion filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseInterviewQuestionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collector_interview_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectorInterview', 'add_empty' => true)),
      'question'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'answer'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'photo'                  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'collector_interview_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CollectorInterview', 'column' => 'id')),
      'question'               => new sfValidatorPass(array('required' => false)),
      'answer'                 => new sfValidatorPass(array('required' => false)),
      'photo'                  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('interview_question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'InterviewQuestion';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'collector_interview_id' => 'ForeignKey',
      'question'               => 'Text',
      'answer'                 => 'Text',
      'photo'                  => 'Text',
    );
  }
}
