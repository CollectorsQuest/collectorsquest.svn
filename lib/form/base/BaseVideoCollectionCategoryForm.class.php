<?php

/**
 * VideoCollectionCategory form base class.
 *
 * @method VideoCollectionCategory getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseVideoCollectionCategoryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'video_id'               => new sfWidgetFormPropelChoice(array('model' => 'Video', 'add_empty' => true)),
      'collection_category_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionCategory', 'add_empty' => true)),
      'created_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorPropelChoice(array('model' => 'VideoCollectionCategory', 'column' => 'id', 'required' => false)),
      'video_id'               => new sfValidatorPropelChoice(array('model' => 'Video', 'column' => 'id', 'required' => false)),
      'collection_category_id' => new sfValidatorPropelChoice(array('model' => 'CollectionCategory', 'column' => 'id', 'required' => false)),
      'created_at'             => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('video_collection_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VideoCollectionCategory';
  }


}
