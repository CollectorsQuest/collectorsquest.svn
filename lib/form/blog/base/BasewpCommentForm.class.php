<?php

/**
 * wpComment form base class.
 *
 * @method wpComment getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpCommentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'comment_id'           => new sfWidgetFormInputHidden(),
      'comment_author'       => new sfWidgetFormInputText(),
      'comment_author_email' => new sfWidgetFormInputText(),
      'comment_date'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'comment_id'           => new sfValidatorPropelChoice(array('model' => 'wpComment', 'column' => 'comment_id', 'required' => false)),
      'comment_author'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'comment_author_email' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'comment_date'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpComment';
  }


}
