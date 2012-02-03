<?php

/**
 * Comment form base class.
 *
 * @method Comment getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCommentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'disqus_id'      => new sfWidgetFormInputText(),
      'parent_id'      => new sfWidgetFormInputText(),
      'collection_id'  => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => false)),
      'collectible_id' => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => true)),
      'collector_id'   => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'author_name'    => new sfWidgetFormInputText(),
      'author_email'   => new sfWidgetFormInputText(),
      'author_url'     => new sfWidgetFormInputText(),
      'subject'        => new sfWidgetFormInputText(),
      'body'           => new sfWidgetFormTextarea(),
      'ip_address'     => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'disqus_id'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'parent_id'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'collection_id'  => new sfValidatorPropelChoice(array('model' => 'Collection', 'column' => 'id')),
      'collectible_id' => new sfValidatorPropelChoice(array('model' => 'Collectible', 'column' => 'id', 'required' => false)),
      'collector_id'   => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'author_name'    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_email'   => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_url'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subject'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'body'           => new sfValidatorString(),
      'ip_address'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Comment', 'column' => array('disqus_id')))
    );

    $this->widgetSchema->setNameFormat('comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }


}
