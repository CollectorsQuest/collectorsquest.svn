<?php

/**
 * CollectibleArchive form base class.
 *
 * @method CollectibleArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectibleArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'collector_id'      => new sfWidgetFormInputText(),
      'collection_id'     => new sfWidgetFormInputText(),
      'name'              => new sfWidgetFormInputText(),
      'slug'              => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'num_comments'      => new sfWidgetFormInputText(),
      'score'             => new sfWidgetFormInputText(),
      'position'          => new sfWidgetFormInputText(),
      'is_name_automatic' => new sfWidgetFormInputCheckbox(),
      'archived_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collector_id'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'collection_id'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'name'              => new sfValidatorString(array('max_length' => 128)),
      'slug'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description'       => new sfValidatorString(),
      'num_comments'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'score'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'position'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'is_name_automatic' => new sfValidatorBoolean(array('required' => false)),
      'archived_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectibleArchive', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('collectible_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleArchive';
  }


}
