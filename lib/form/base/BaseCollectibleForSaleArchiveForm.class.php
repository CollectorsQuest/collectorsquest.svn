<?php

/**
 * CollectibleForSaleArchive form base class.
 *
 * @method CollectibleForSaleArchive getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseCollectibleForSaleArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'collectible_id'      => new sfWidgetFormInputText(),
      'price'               => new sfWidgetFormInputText(),
      'condition'           => new sfWidgetFormInputText(),
      'is_price_negotiable' => new sfWidgetFormInputCheckbox(),
      'is_shipping_free'    => new sfWidgetFormInputCheckbox(),
      'is_sold'             => new sfWidgetFormInputCheckbox(),
      'is_ready'            => new sfWidgetFormInputCheckbox(),
      'quantity'            => new sfWidgetFormInputText(),
      'archived_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'collectible_id'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'price'               => new sfValidatorNumber(array('required' => false)),
      'condition'           => new sfValidatorString(),
      'is_price_negotiable' => new sfValidatorBoolean(array('required' => false)),
      'is_shipping_free'    => new sfValidatorBoolean(array('required' => false)),
      'is_sold'             => new sfValidatorBoolean(array('required' => false)),
      'is_ready'            => new sfValidatorBoolean(array('required' => false)),
      'quantity'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'archived_at'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'CollectibleForSaleArchive', 'column' => array('collectible_id')))
    );

    $this->widgetSchema->setNameFormat('collectible_for_sale_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectibleForSaleArchive';
  }


}
