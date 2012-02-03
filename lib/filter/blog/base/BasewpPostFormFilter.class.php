<?php

/**
 * wpPost filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpPostFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_author'           => new sfWidgetFormPropelChoice(array('model' => 'wpUser', 'add_empty' => true)),
      'post_date'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_date_gmt'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_content'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_title'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_excerpt'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_status'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_status'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ping_status'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_password'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'to_ping'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pinged'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_modified'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_modified_gmt'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_content_filtered' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_parent'           => new sfWidgetFormPropelChoice(array('model' => 'wpPost', 'add_empty' => true)),
      'guid'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'menu_order'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_type'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_mime_type'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_count'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'post_author'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpUser', 'column' => 'id')),
      'post_date'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'post_date_gmt'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'post_content'          => new sfValidatorPass(array('required' => false)),
      'post_title'            => new sfValidatorPass(array('required' => false)),
      'post_excerpt'          => new sfValidatorPass(array('required' => false)),
      'post_status'           => new sfValidatorPass(array('required' => false)),
      'comment_status'        => new sfValidatorPass(array('required' => false)),
      'ping_status'           => new sfValidatorPass(array('required' => false)),
      'post_password'         => new sfValidatorPass(array('required' => false)),
      'post_name'             => new sfValidatorPass(array('required' => false)),
      'to_ping'               => new sfValidatorPass(array('required' => false)),
      'pinged'                => new sfValidatorPass(array('required' => false)),
      'post_modified'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'post_modified_gmt'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'post_content_filtered' => new sfValidatorPass(array('required' => false)),
      'post_parent'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpPost', 'column' => 'id')),
      'guid'                  => new sfValidatorPass(array('required' => false)),
      'menu_order'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'post_type'             => new sfValidatorPass(array('required' => false)),
      'post_mime_type'        => new sfValidatorPass(array('required' => false)),
      'comment_count'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('wp_post_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpPost';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'post_author'           => 'ForeignKey',
      'post_date'             => 'Date',
      'post_date_gmt'         => 'Date',
      'post_content'          => 'Text',
      'post_title'            => 'Text',
      'post_excerpt'          => 'Text',
      'post_status'           => 'Text',
      'comment_status'        => 'Text',
      'ping_status'           => 'Text',
      'post_password'         => 'Text',
      'post_name'             => 'Text',
      'to_ping'               => 'Text',
      'pinged'                => 'Text',
      'post_modified'         => 'Date',
      'post_modified_gmt'     => 'Date',
      'post_content_filtered' => 'Text',
      'post_parent'           => 'ForeignKey',
      'guid'                  => 'Text',
      'menu_order'            => 'Number',
      'post_type'             => 'Text',
      'post_mime_type'        => 'Text',
      'comment_count'         => 'Number',
    );
  }
}
