<?php

/**
 * Message filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseMessageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'queue_id'   => new sfWidgetFormPropelChoice(array('model' => 'Queue', 'add_empty' => true)),
      'handle'     => new sfWidgetFormFilterInput(),
      'body'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'md5'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'timeout'    => new sfWidgetFormFilterInput(),
      'created'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'queue_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Queue', 'column' => 'queue_id')),
      'handle'     => new sfValidatorPass(array('required' => false)),
      'body'       => new sfValidatorPass(array('required' => false)),
      'md5'        => new sfValidatorPass(array('required' => false)),
      'timeout'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('message_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Message';
  }

  public function getFields()
  {
    return array(
      'message_id' => 'Number',
      'queue_id'   => 'ForeignKey',
      'handle'     => 'Text',
      'body'       => 'Text',
      'md5'        => 'Text',
      'timeout'    => 'Number',
      'created'    => 'Number',
    );
  }
}
