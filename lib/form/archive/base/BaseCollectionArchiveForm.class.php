<?php

/**
 * CollectionArchive form base class.
 *
 * @method CollectionArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectionArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'graph_id'               => new sfWidgetFormInputText(),
      'collection_category_id' => new sfWidgetFormInputText(),
      'collector_id'           => new sfWidgetFormInputText(),
      'name'                   => new sfWidgetFormInputText(),
      'slug'                   => new sfWidgetFormInputText(),
      'description'            => new sfWidgetFormTextarea(),
      'num_items'              => new sfWidgetFormInputText(),
      'num_views'              => new sfWidgetFormInputText(),
      'num_comments'           => new sfWidgetFormInputText(),
      'num_ratings'            => new sfWidgetFormInputText(),
      'score'                  => new sfWidgetFormInputText(),
      'is_public'              => new sfWidgetFormInputCheckbox(),
      'is_featured'            => new sfWidgetFormInputCheckbox(),
      'comments_on'            => new sfWidgetFormInputCheckbox(),
      'rating_on'              => new sfWidgetFormInputCheckbox(),
      'eblob'                  => new sfWidgetFormTextarea(),
      'updated_at'             => new sfWidgetFormDateTime(),
      'created_at'             => new sfWidgetFormDateTime(),
      'archived_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'graph_id'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collection_category_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collector_id'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 255)),
      'slug'                   => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description'            => new sfValidatorString(),
      'num_items'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'num_views'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'num_comments'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'num_ratings'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'score'                  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'is_public'              => new sfValidatorBoolean(array('required' => false)),
      'is_featured'            => new sfValidatorBoolean(array('required' => false)),
      'comments_on'            => new sfValidatorBoolean(array('required' => false)),
      'rating_on'              => new sfValidatorBoolean(array('required' => false)),
      'eblob'                  => new sfValidatorString(array('required' => false)),
      'updated_at'             => new sfValidatorDateTime(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(array('required' => false)),
      'archived_at'            => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collection_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionArchive';
  }


}
