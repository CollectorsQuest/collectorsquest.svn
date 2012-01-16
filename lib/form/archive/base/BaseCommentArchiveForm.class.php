<?php

/**
 * CommentArchive form base class.
 *
 * @method CommentArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCommentArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'disqus_id'      => new sfWidgetFormInputText(),
      'parent_id'      => new sfWidgetFormInputText(),
      'collection_id'  => new sfWidgetFormInputText(),
      'collectible_id' => new sfWidgetFormInputText(),
      'collector_id'   => new sfWidgetFormInputText(),
      'author_name'    => new sfWidgetFormInputText(),
      'author_email'   => new sfWidgetFormInputText(),
      'author_url'     => new sfWidgetFormInputText(),
      'subject'        => new sfWidgetFormInputText(),
      'body'           => new sfWidgetFormTextarea(),
      'ip_address'     => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'archived_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'disqus_id'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'parent_id'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'collection_id'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collectible_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collector_id'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'author_name'    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_email'   => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_url'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subject'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'body'           => new sfValidatorString(),
      'ip_address'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'archived_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comment_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommentArchive';
  }


}
