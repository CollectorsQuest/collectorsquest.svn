<?php

/**
 * wpOption form base class.
 *
 * @method wpOption getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpOptionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'option_id'    => new sfWidgetFormInputHidden(),
      'blog_id'      => new sfWidgetFormInputHidden(),
      'option_name'  => new sfWidgetFormInputHidden(),
      'option_value' => new sfWidgetFormTextarea(),
      'autoload'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'option_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getOptionId()), 'empty_value' => $this->getObject()->getOptionId(), 'required' => false)),
      'blog_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getBlogId()), 'empty_value' => $this->getObject()->getBlogId(), 'required' => false)),
      'option_name'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getOptionName()), 'empty_value' => $this->getObject()->getOptionName(), 'required' => false)),
      'option_value' => new sfValidatorString(),
      'autoload'     => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('wp_option[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpOption';
  }


}
