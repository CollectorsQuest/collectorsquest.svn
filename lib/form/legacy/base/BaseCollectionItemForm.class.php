<?php

/**
 * CollectionItem form base class.
 *
 * @method CollectionItem getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectionItemForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'collection_id'   => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'name'            => new sfWidgetFormInputText(),
      'slug'            => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'est_value'       => new sfWidgetFormInputText(),
      'purchased_price' => new sfWidgetFormInputText(),
      'currency'        => new sfWidgetFormInputText(),
      'photo'           => new sfWidgetFormInputText(),
      'is_for_sale'     => new sfWidgetFormInputCheckbox(),
      'num_views'       => new sfWidgetFormInputText(),
      'position'        => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'CollectionItem', 'column' => 'id', 'required' => false)),
      'collection_id'   => new sfValidatorPropelChoice(array('model' => 'Collection', 'column' => 'id', 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 50)),
      'slug'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description'     => new sfValidatorString(),
      'est_value'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'purchased_price' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'currency'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'photo'           => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'is_for_sale'     => new sfValidatorBoolean(array('required' => false)),
      'num_views'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'position'        => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collection_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionItem';
  }


}
