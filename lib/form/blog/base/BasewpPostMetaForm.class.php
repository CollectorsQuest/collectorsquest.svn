<?php

/**
 * wpPostMeta form base class.
 *
 * @method wpPostMeta getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BasewpPostMetaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'    => new sfWidgetFormInputHidden(),
      'post_id'    => new sfWidgetFormPropelChoice(array('model' => 'wpPost', 'add_empty' => false)),
      'meta_key'   => new sfWidgetFormInputText(),
      'meta_value' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'meta_id'    => new sfValidatorPropelChoice(array('model' => 'wpPostMeta', 'column' => 'meta_id', 'required' => false)),
      'post_id'    => new sfValidatorPropelChoice(array('model' => 'wpPost', 'column' => 'id')),
      'meta_key'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_value' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_post_meta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpPostMeta';
  }


}
