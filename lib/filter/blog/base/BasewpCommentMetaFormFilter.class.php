<?php

/**
 * wpCommentMeta filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpCommentMetaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'comment_id' => new sfWidgetFormPropelChoice(array('model' => 'wpComment', 'add_empty' => true)),
      'meta_key'   => new sfWidgetFormFilterInput(),
      'meta_value' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'comment_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpComment', 'column' => 'comment_id')),
      'meta_key'   => new sfValidatorPass(array('required' => false)),
      'meta_value' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_comment_meta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpCommentMeta';
  }

  public function getFields()
  {
    return array(
      'meta_id'    => 'Number',
      'comment_id' => 'ForeignKey',
      'meta_key'   => 'Text',
      'meta_value' => 'Text',
    );
  }
}
