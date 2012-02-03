<?php

/**
 * wpUser filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpUserFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_login'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_pass'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_nicename'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_email'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_url'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_registered'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'user_activation_key' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_status'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'display_name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_login'          => new sfValidatorPass(array('required' => false)),
      'user_pass'           => new sfValidatorPass(array('required' => false)),
      'user_nicename'       => new sfValidatorPass(array('required' => false)),
      'user_email'          => new sfValidatorPass(array('required' => false)),
      'user_url'            => new sfValidatorPass(array('required' => false)),
      'user_registered'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'user_activation_key' => new sfValidatorPass(array('required' => false)),
      'user_status'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'display_name'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpUser';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'user_login'          => 'Text',
      'user_pass'           => 'Text',
      'user_nicename'       => 'Text',
      'user_email'          => 'Text',
      'user_url'            => 'Text',
      'user_registered'     => 'Date',
      'user_activation_key' => 'Text',
      'user_status'         => 'Number',
      'display_name'        => 'Text',
    );
  }
}
