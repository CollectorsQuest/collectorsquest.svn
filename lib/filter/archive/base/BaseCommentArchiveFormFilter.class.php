<?php

/**
 * CommentArchive filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseCommentArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'disqus_id'      => new sfWidgetFormFilterInput(),
      'parent_id'      => new sfWidgetFormFilterInput(),
      'collection_id'  => new sfWidgetFormFilterInput(),
      'collectible_id' => new sfWidgetFormFilterInput(),
      'collector_id'   => new sfWidgetFormFilterInput(),
      'author_name'    => new sfWidgetFormFilterInput(),
      'author_email'   => new sfWidgetFormFilterInput(),
      'author_url'     => new sfWidgetFormFilterInput(),
      'subject'        => new sfWidgetFormFilterInput(),
      'body'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ip_address'     => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'archived_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'disqus_id'      => new sfValidatorPass(array('required' => false)),
      'parent_id'      => new sfValidatorPass(array('required' => false)),
      'collection_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collectible_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collector_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'author_name'    => new sfValidatorPass(array('required' => false)),
      'author_email'   => new sfValidatorPass(array('required' => false)),
      'author_url'     => new sfValidatorPass(array('required' => false)),
      'subject'        => new sfValidatorPass(array('required' => false)),
      'body'           => new sfValidatorPass(array('required' => false)),
      'ip_address'     => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'archived_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('comment_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommentArchive';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'disqus_id'      => 'Text',
      'parent_id'      => 'Text',
      'collection_id'  => 'Number',
      'collectible_id' => 'Number',
      'collector_id'   => 'Number',
      'author_name'    => 'Text',
      'author_email'   => 'Text',
      'author_url'     => 'Text',
      'subject'        => 'Text',
      'body'           => 'Text',
      'ip_address'     => 'Text',
      'created_at'     => 'Date',
      'archived_at'    => 'Date',
    );
  }
}
