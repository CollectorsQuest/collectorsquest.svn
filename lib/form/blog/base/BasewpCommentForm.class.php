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
      'comment_post_id'      => new sfWidgetFormPropelChoice(array('model' => 'wpPost', 'add_empty' => false)),
      'comment_author'       => new sfWidgetFormInputText(),
      'comment_author_email' => new sfWidgetFormInputText(),
      'comment_author_url'   => new sfWidgetFormInputText(),
      'comment_author_IP'    => new sfWidgetFormInputText(),
      'comment_date'         => new sfWidgetFormDateTime(),
      'comment_date_gmt'     => new sfWidgetFormDateTime(),
      'comment_content'      => new sfWidgetFormTextarea(),
      'comment_karma'        => new sfWidgetFormInputText(),
      'comment_approved'     => new sfWidgetFormInputText(),
      'comment_agent'        => new sfWidgetFormInputText(),
      'comment_type'         => new sfWidgetFormInputText(),
      'comment_parent'       => new sfWidgetFormPropelChoice(array('model' => 'wpComment', 'add_empty' => false)),
      'user_id'              => new sfWidgetFormPropelChoice(array('model' => 'wpUser', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'comment_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getCommentId()), 'empty_value' => $this->getObject()->getCommentId(), 'required' => false)),
      'comment_post_id'      => new sfValidatorPropelChoice(array('model' => 'wpPost', 'column' => 'id')),
      'comment_author'       => new sfValidatorString(array('max_length' => 100)),
      'comment_author_email' => new sfValidatorString(array('max_length' => 100)),
      'comment_author_url'   => new sfValidatorString(array('max_length' => 200)),
      'comment_author_IP'    => new sfValidatorString(array('max_length' => 100)),
      'comment_date'         => new sfValidatorDateTime(),
      'comment_date_gmt'     => new sfValidatorDateTime(),
      'comment_content'      => new sfValidatorString(),
      'comment_karma'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'comment_approved'     => new sfValidatorString(array('max_length' => 20)),
      'comment_agent'        => new sfValidatorString(array('max_length' => 255)),
      'comment_type'         => new sfValidatorString(array('max_length' => 20)),
      'comment_parent'       => new sfValidatorPropelChoice(array('model' => 'wpComment', 'column' => 'comment_id')),
      'user_id'              => new sfValidatorPropelChoice(array('model' => 'wpUser', 'column' => 'id')),
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
