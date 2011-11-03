<?php

/**
 * wpPost filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BasewpPostFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_author'           => new sfWidgetFormPropelChoice(array('model' => 'wpUser', 'add_empty' => true)),
      'post_date'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_date_gmt'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_content'          => new sfWidgetFormFilterInput(),
      'post_title'            => new sfWidgetFormFilterInput(),
      'post_excerpt'          => new sfWidgetFormFilterInput(),
      'post_category'         => new sfWidgetFormFilterInput(),
      'post_status'           => new sfWidgetFormFilterInput(),
      'comment_status'        => new sfWidgetFormFilterInput(),
      'ping_status'           => new sfWidgetFormFilterInput(),
      'post_password'         => new sfWidgetFormFilterInput(),
      'post_name'             => new sfWidgetFormFilterInput(),
      'to_ping'               => new sfWidgetFormFilterInput(),
      'pinged'                => new sfWidgetFormFilterInput(),
      'post_modified'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'post_modified_gmt'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'post_content_filtered' => new sfWidgetFormFilterInput(),
      'post_parent'           => new sfWidgetFormFilterInput(),
      'guid'                  => new sfWidgetFormFilterInput(),
      'menu_order'            => new sfWidgetFormFilterInput(),
      'post_type'             => new sfWidgetFormFilterInput(),
      'post_mime_type'        => new sfWidgetFormFilterInput(),
      'comment_count'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'post_author'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpUser', 'column' => 'id')),
      'post_date'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'post_date_gmt'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'post_content'          => new sfValidatorPass(array('required' => false)),
      'post_title'            => new sfValidatorPass(array('required' => false)),
      'post_excerpt'          => new sfValidatorPass(array('required' => false)),
      'post_category'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'post_parent'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'post_category'         => 'Number',
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
      'post_parent'           => 'Number',
      'guid'                  => 'Text',
      'menu_order'            => 'Number',
      'post_type'             => 'Text',
      'post_mime_type'        => 'Text',
      'comment_count'         => 'Number',
    );
  }
}
