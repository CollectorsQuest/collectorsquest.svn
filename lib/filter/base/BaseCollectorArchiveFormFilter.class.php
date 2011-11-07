<?php

/**
 * CollectorArchive filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCollectorArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'facebook_id'         => new sfWidgetFormFilterInput(),
      'username'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'display_name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'                => new sfWidgetFormFilterInput(),
      'sha1_password'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salt'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'score'               => new sfWidgetFormFilterInput(),
      'email'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_type'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'items_allowed'       => new sfWidgetFormFilterInput(),
      'what_you_collect'    => new sfWidgetFormFilterInput(),
      'purchases_per_year'  => new sfWidgetFormFilterInput(),
      'what_you_sell'       => new sfWidgetFormFilterInput(),
      'annually_spend'      => new sfWidgetFormFilterInput(),
      'most_expensive_item' => new sfWidgetFormFilterInput(),
      'company'             => new sfWidgetFormFilterInput(),
      'is_public'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'session_id'          => new sfWidgetFormFilterInput(),
      'last_seen_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'archived_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'facebook_id'         => new sfValidatorPass(array('required' => false)),
      'username'            => new sfValidatorPass(array('required' => false)),
      'display_name'        => new sfValidatorPass(array('required' => false)),
      'slug'                => new sfValidatorPass(array('required' => false)),
      'sha1_password'       => new sfValidatorPass(array('required' => false)),
      'salt'                => new sfValidatorPass(array('required' => false)),
      'score'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'email'               => new sfValidatorPass(array('required' => false)),
      'user_type'           => new sfValidatorPass(array('required' => false)),
      'items_allowed'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'what_you_collect'    => new sfValidatorPass(array('required' => false)),
      'purchases_per_year'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'what_you_sell'       => new sfValidatorPass(array('required' => false)),
      'annually_spend'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'most_expensive_item' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'company'             => new sfValidatorPass(array('required' => false)),
      'is_public'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'session_id'          => new sfValidatorPass(array('required' => false)),
      'last_seen_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'archived_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collector_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectorArchive';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'facebook_id'         => 'Text',
      'username'            => 'Text',
      'display_name'        => 'Text',
      'slug'                => 'Text',
      'sha1_password'       => 'Text',
      'salt'                => 'Text',
      'score'               => 'Number',
      'email'               => 'Text',
      'user_type'           => 'Text',
      'items_allowed'       => 'Number',
      'what_you_collect'    => 'Text',
      'purchases_per_year'  => 'Number',
      'what_you_sell'       => 'Text',
      'annually_spend'      => 'Number',
      'most_expensive_item' => 'Number',
      'company'             => 'Text',
      'is_public'           => 'Boolean',
      'session_id'          => 'Text',
      'last_seen_at'        => 'Date',
      'archived_at'         => 'Date',
    );
  }
}
