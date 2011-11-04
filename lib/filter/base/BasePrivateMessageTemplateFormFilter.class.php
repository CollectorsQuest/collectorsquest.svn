<?php

/**
 * PrivateMessageTemplate filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasePrivateMessageTemplateFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'subject'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description' => new sfWidgetFormFilterInput(),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'subject'     => new sfValidatorPass(array('required' => false)),
      'body'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('private_message_template_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrivateMessageTemplate';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'subject'     => 'Text',
      'body'        => 'Text',
      'description' => 'Text',
      'updated_at'  => 'Date',
      'created_at'  => 'Date',
    );
  }
}
