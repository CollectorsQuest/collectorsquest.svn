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
      'graph_id'          => new sfWidgetFormInputText(),
      'collector_id'      => new sfWidgetFormInputText(),
      'collection_id'     => new sfWidgetFormInputText(),
      'name'              => new sfWidgetFormInputText(),
      'slug'              => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'num_comments'      => new sfWidgetFormInputText(),
      'score'             => new sfWidgetFormInputText(),
      'position'          => new sfWidgetFormInputText(),
      'is_name_automatic' => new sfWidgetFormInputCheckbox(),
      'eblob'             => new sfWidgetFormTextarea(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'created_at'        => new sfWidgetFormDateTime(),
      'archived_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'graph_id'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collector_id'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collection_id'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 255)),
      'slug'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description'       => new sfValidatorString(),
      'num_comments'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'score'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'position'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'is_name_automatic' => new sfValidatorBoolean(array('required' => false)),
      'eblob'             => new sfValidatorString(array('required' => false)),
      'updated_at'        => new sfValidatorDateTime(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(array('required' => false)),
      'archived_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collectible_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleArchive';
  }


}
