<?php

/**
 * Collectible form base class.
 *
 * @method Collectible getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectibleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'collector_id'      => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'collection_id'     => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => false)),
      'name'              => new sfWidgetFormInputText(),
      'slug'              => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'num_comments'      => new sfWidgetFormInputText(),
      'score'             => new sfWidgetFormInputText(),
      'position'          => new sfWidgetFormInputText(),
      'is_name_automatic' => new sfWidgetFormInputCheckbox(),
      'deleted_at'        => new sfWidgetFormDateTime(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id'      => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'collection_id'     => new sfValidatorPropelChoice(array('model' => 'Collection', 'column' => 'id')),
      'name'              => new sfValidatorString(array('max_length' => 128)),
      'slug'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description'       => new sfValidatorString(),
      'num_comments'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'score'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'position'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'is_name_automatic' => new sfValidatorBoolean(array('required' => false)),
      'deleted_at'        => new sfValidatorDateTime(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(array('required' => false)),
      'updated_at'        => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Collectible', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('collectible[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Collectible';
  }


}
