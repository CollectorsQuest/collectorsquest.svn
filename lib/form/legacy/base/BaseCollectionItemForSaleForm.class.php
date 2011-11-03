<?php

/**
 * CollectionItemForSale form base class.
 *
 * @method CollectionItemForSale getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseCollectionItemForSaleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'item_id'             => new sfWidgetFormPropelChoice(array('model' => 'CollectionItem', 'add_empty' => false)),
      'price'               => new sfWidgetFormInputText(),
      'condition'           => new sfWidgetFormInputText(),
      'is_price_negotiable' => new sfWidgetFormInputCheckbox(),
      'is_shipping_free'    => new sfWidgetFormInputCheckbox(),
      'is_sold'             => new sfWidgetFormInputCheckbox(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorPropelChoice(array('model' => 'CollectionItemForSale', 'column' => 'id', 'required' => false)),
      'item_id'             => new sfValidatorPropelChoice(array('model' => 'CollectionItem', 'column' => 'id')),
      'price'               => new sfValidatorNumber(array('required' => false)),
      'condition'           => new sfValidatorString(),
      'is_price_negotiable' => new sfValidatorBoolean(array('required' => false)),
      'is_shipping_free'    => new sfValidatorBoolean(array('required' => false)),
      'is_sold'             => new sfValidatorBoolean(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(array('required' => false)),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectionItemForSale', 'column' => array('item_id')))
    );

    $this->widgetSchema->setNameFormat('collection_item_for_sale[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionItemForSale';
  }


}
