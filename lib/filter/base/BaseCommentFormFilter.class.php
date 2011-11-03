<?php

/**
 * Comment filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseCommentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'disqus_id'      => new sfWidgetFormFilterInput(),
      'parent_id'      => new sfWidgetFormFilterInput(),
      'collection_id'  => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'collectible_id' => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => true)),
      'collector_id'   => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'author_name'    => new sfWidgetFormFilterInput(),
      'author_email'   => new sfWidgetFormFilterInput(),
      'author_url'     => new sfWidgetFormFilterInput(),
      'subject'        => new sfWidgetFormFilterInput(),
      'body'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ip_address'     => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'disqus_id'      => new sfValidatorPass(array('required' => false)),
      'parent_id'      => new sfValidatorPass(array('required' => false)),
      'collection_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collection', 'column' => 'id')),
      'collectible_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collectible', 'column' => 'id')),
      'collector_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'author_name'    => new sfValidatorPass(array('required' => false)),
      'author_email'   => new sfValidatorPass(array('required' => false)),
      'author_url'     => new sfValidatorPass(array('required' => false)),
      'subject'        => new sfValidatorPass(array('required' => false)),
      'body'           => new sfValidatorPass(array('required' => false)),
      'ip_address'     => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('comment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'disqus_id'      => 'Text',
      'parent_id'      => 'Text',
      'collection_id'  => 'ForeignKey',
      'collectible_id' => 'ForeignKey',
      'collector_id'   => 'ForeignKey',
      'author_name'    => 'Text',
      'author_email'   => 'Text',
      'author_url'     => 'Text',
      'subject'        => 'Text',
      'body'           => 'Text',
      'ip_address'     => 'Text',
      'created_at'     => 'Date',
    );
  }
}
