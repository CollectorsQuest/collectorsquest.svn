<?php

/**
 * CollectorMessage filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseCollectorMessageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'sender'     => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'receiver'   => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'subject'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'new_msg'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'thread'     => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'sender'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'receiver'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'subject'    => new sfValidatorPass(array('required' => false)),
      'body'       => new sfValidatorPass(array('required' => false)),
      'new_msg'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'thread'     => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collector_message_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorMessage';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'sender'     => 'ForeignKey',
      'receiver'   => 'ForeignKey',
      'subject'    => 'Text',
      'body'       => 'Text',
      'new_msg'    => 'Boolean',
      'thread'     => 'Text',
      'created_at' => 'Date',
    );
  }
}
