<?php

/**
 * PrivateMessage filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasePrivateMessageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'thread'       => new sfWidgetFormFilterInput(),
      'sender'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'receiver'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subject'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_rich'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_read'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_replied'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_forwarded' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_marked'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_deleted'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'thread'       => new sfValidatorPass(array('required' => false)),
      'sender'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'receiver'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'subject'      => new sfValidatorPass(array('required' => false)),
      'body'         => new sfValidatorPass(array('required' => false)),
      'is_rich'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_read'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_replied'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_forwarded' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_marked'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_deleted'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('private_message_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrivateMessage';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'thread'       => 'Text',
      'sender'       => 'Number',
      'receiver'     => 'Number',
      'subject'      => 'Text',
      'body'         => 'Text',
      'is_rich'      => 'Boolean',
      'is_read'      => 'Boolean',
      'is_replied'   => 'Boolean',
      'is_forwarded' => 'Boolean',
      'is_marked'    => 'Boolean',
      'is_deleted'   => 'Boolean',
      'created_at'   => 'Date',
    );
  }
}
