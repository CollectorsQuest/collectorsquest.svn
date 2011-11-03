<?php

/**
 * wpComment filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BasewpCommentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'comment_author'       => new sfWidgetFormFilterInput(),
      'comment_author_email' => new sfWidgetFormFilterInput(),
      'comment_date'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'comment_author'       => new sfValidatorPass(array('required' => false)),
      'comment_author_email' => new sfValidatorPass(array('required' => false)),
      'comment_date'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
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
      'comment_author'       => 'Text',
      'comment_author_email' => 'Text',
      'comment_date'         => 'Date',
    );
  }
}
