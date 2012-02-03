<?php

/**
 * wpCommentMeta form base class.
 *
 * @method wpCommentMeta getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpCommentMetaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'    => new sfWidgetFormInputHidden(),
      'comment_id' => new sfWidgetFormPropelChoice(array('model' => 'wpComment', 'add_empty' => false)),
      'meta_key'   => new sfWidgetFormInputText(),
      'meta_value' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'meta_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getMetaId()), 'empty_value' => $this->getObject()->getMetaId(), 'required' => false)),
      'comment_id' => new sfValidatorPropelChoice(array('model' => 'wpComment', 'column' => 'comment_id')),
      'meta_key'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_value' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_comment_meta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpCommentMeta';
  }


}
