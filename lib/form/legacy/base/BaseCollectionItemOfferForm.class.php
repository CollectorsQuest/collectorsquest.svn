<?php

/**
 * CollectionItemOffer form base class.
 *
 * @method CollectionItemOffer getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectionItemOfferForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'item_id'          => new sfWidgetFormPropelChoice(array('model' => 'CollectionItem', 'add_empty' => false)),
      'item_for_sale_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectionItemForSale', 'add_empty' => false)),
      'collector_id'     => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'price'            => new sfWidgetFormInputText(),
      'status'           => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'item_id'          => new sfValidatorPropelChoice(array('model' => 'CollectionItem', 'column' => 'id')),
      'item_for_sale_id' => new sfValidatorPropelChoice(array('model' => 'CollectionItemForSale', 'column' => 'id')),
      'collector_id'     => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'price'            => new sfValidatorNumber(array('required' => false)),
      'status'           => new sfValidatorString(),
      'created_at'       => new sfValidatorDateTime(array('required' => false)),
      'updated_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collection_item_offer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionItemOffer';
  }


}
