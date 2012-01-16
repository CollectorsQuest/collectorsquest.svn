<?php

/**
 * CollectibleOffer form base class.
 *
 * @method CollectibleOffer getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectibleOfferForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'collectible_id'          => new sfWidgetFormPropelChoice(array('model' => 'Collectible', 'add_empty' => false)),
      'collectible_for_sale_id' => new sfWidgetFormPropelChoice(array('model' => 'CollectibleForSale', 'add_empty' => false)),
      'collector_id'            => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => false)),
      'price'                   => new sfWidgetFormInputText(),
      'status'                  => new sfWidgetFormInputText(),
      'deleted_at'              => new sfWidgetFormDateTime(),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collectible_id'          => new sfValidatorPropelChoice(array('model' => 'Collectible', 'column' => 'id')),
      'collectible_for_sale_id' => new sfValidatorPropelChoice(array('model' => 'CollectibleForSale', 'column' => 'id')),
      'collector_id'            => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id')),
      'price'                   => new sfValidatorNumber(array('required' => false)),
      'status'                  => new sfValidatorString(),
      'deleted_at'              => new sfValidatorDateTime(array('required' => false)),
      'created_at'              => new sfValidatorDateTime(array('required' => false)),
      'updated_at'              => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collectible_offer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleOffer';
  }


}
