<?php

/**
 * CollectionCategory form base class.
 *
 * @method CollectionCategory getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectionCategoryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'parent_id' => new sfWidgetFormInputText(),
      'name'      => new sfWidgetFormInputText(),
      'slug'      => new sfWidgetFormInputText(),
      'score'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'parent_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'name'      => new sfValidatorString(array('max_length' => 64)),
      'slug'      => new sfValidatorString(array('max_length' => 64)),
      'score'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collection_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionCategory';
  }


}
