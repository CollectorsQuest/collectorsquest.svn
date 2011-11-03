<?php

/**
 * CollectionCategoryField form base class.
 *
 * @method CollectionCategoryField getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseCollectionCategoryFieldForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'collection_category_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionCategory', 'add_empty' => true)),
      'custom_field_id'        => new sfWidgetFormPropelChoice(array('model' => 'CustomField', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorPropelChoice(array('model' => 'CollectionCategoryField', 'column' => 'id', 'required' => false)),
      'collection_category_id' => new sfValidatorPropelChoice(array('model' => 'CollectionCategory', 'column' => 'id', 'required' => false)),
      'custom_field_id'        => new sfValidatorPropelChoice(array('model' => 'CustomField', 'column' => 'id', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectionCategoryField', 'column' => array('collection_category_id', 'custom_field_id')))
    );

    $this->widgetSchema->setNameFormat('collection_category_field[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionCategoryField';
  }


}
