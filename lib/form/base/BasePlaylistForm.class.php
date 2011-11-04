<?php

/**
 * Playlist form base class.
 *
 * @method Playlist getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasePlaylistForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'slug'         => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'type'         => new sfWidgetFormInputText(),
      'length'       => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'published_at' => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 64)),
      'slug'         => new sfValidatorString(array('max_length' => 64)),
      'description'  => new sfValidatorString(),
      'type'         => new sfValidatorString(array('max_length' => 64)),
      'length'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'published_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('playlist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Playlist';
  }


}
