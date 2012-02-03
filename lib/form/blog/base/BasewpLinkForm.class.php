<?php

/**
 * wpLink form base class.
 *
 * @method wpLink getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpLinkForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'link_id'          => new sfWidgetFormInputHidden(),
      'link_url'         => new sfWidgetFormInputText(),
      'link_name'        => new sfWidgetFormInputText(),
      'link_image'       => new sfWidgetFormInputText(),
      'link_target'      => new sfWidgetFormInputText(),
      'link_description' => new sfWidgetFormInputText(),
      'link_visible'     => new sfWidgetFormInputText(),
      'link_owner'       => new sfWidgetFormInputText(),
      'link_rating'      => new sfWidgetFormInputText(),
      'link_updated'     => new sfWidgetFormDateTime(),
      'link_rel'         => new sfWidgetFormInputText(),
      'link_notes'       => new sfWidgetFormTextarea(),
      'link_rss'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'link_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getLinkId()), 'empty_value' => $this->getObject()->getLinkId(), 'required' => false)),
      'link_url'         => new sfValidatorString(array('max_length' => 255)),
      'link_name'        => new sfValidatorString(array('max_length' => 255)),
      'link_image'       => new sfValidatorString(array('max_length' => 255)),
      'link_target'      => new sfValidatorString(array('max_length' => 25)),
      'link_description' => new sfValidatorString(array('max_length' => 255)),
      'link_visible'     => new sfValidatorString(array('max_length' => 20)),
      'link_owner'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'link_rating'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'link_updated'     => new sfValidatorDateTime(),
      'link_rel'         => new sfValidatorString(array('max_length' => 255)),
      'link_notes'       => new sfValidatorString(),
      'link_rss'         => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('wp_link[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpLink';
  }


}
