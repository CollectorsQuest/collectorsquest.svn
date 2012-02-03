<?php

/**
 * wpComment filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpCommentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'comment_post_id'      => new sfWidgetFormPropelChoice(array('model' => 'wpPost', 'add_empty' => true)),
      'comment_author'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_author_email' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_author_url'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_author_IP'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_date'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comment_date_gmt'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comment_content'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_karma'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_approved'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_agent'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_type'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_parent'       => new sfWidgetFormPropelChoice(array('model' => 'wpComment', 'add_empty' => true)),
      'user_id'              => new sfWidgetFormPropelChoice(array('model' => 'wpUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'comment_post_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpPost', 'column' => 'id')),
      'comment_author'       => new sfValidatorPass(array('required' => false)),
      'comment_author_email' => new sfValidatorPass(array('required' => false)),
      'comment_author_url'   => new sfValidatorPass(array('required' => false)),
      'comment_author_IP'    => new sfValidatorPass(array('required' => false)),
      'comment_date'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'comment_date_gmt'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'comment_content'      => new sfValidatorPass(array('required' => false)),
      'comment_karma'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comment_approved'     => new sfValidatorPass(array('required' => false)),
      'comment_agent'        => new sfValidatorPass(array('required' => false)),
      'comment_type'         => new sfValidatorPass(array('required' => false)),
      'comment_parent'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpComment', 'column' => 'comment_id')),
      'user_id'              => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpUser', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('wp_comment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpComment';
  }

  public function getFields()
  {
    return array(
      'comment_id'           => 'Number',
      'comment_post_id'      => 'ForeignKey',
      'comment_author'       => 'Text',
      'comment_author_email' => 'Text',
      'comment_author_url'   => 'Text',
      'comment_author_IP'    => 'Text',
      'comment_date'         => 'Date',
      'comment_date_gmt'     => 'Date',
      'comment_content'      => 'Text',
      'comment_karma'        => 'Number',
      'comment_approved'     => 'Text',
      'comment_agent'        => 'Text',
      'comment_type'         => 'Text',
      'comment_parent'       => 'ForeignKey',
      'user_id'              => 'ForeignKey',
    );
  }
}
