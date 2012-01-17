<?php

/**
 * CollectibleOfferArchive form base class.
 *
 * @method CollectibleOfferArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectibleOfferArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'collectible_id'          => new sfWidgetFormInputText(),
      'collectible_for_sale_id' => new sfWidgetFormInputText(),
      'collector_id'            => new sfWidgetFormInputText(),
      'price'                   => new sfWidgetFormInputText(),
      'status'                  => new sfWidgetFormInputText(),
      'updated_at'              => new sfWidgetFormDateTime(),
      'created_at'              => new sfWidgetFormDateTime(),
      'archived_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collectible_id'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collectible_for_sale_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'collector_id'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'price'                   => new sfValidatorNumber(array('required' => false)),
      'status'                  => new sfValidatorString(),
      'updated_at'              => new sfValidatorDateTime(array('required' => false)),
      'created_at'              => new sfValidatorDateTime(array('required' => false)),
      'archived_at'             => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collectible_offer_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleOfferArchive';
  }


}
