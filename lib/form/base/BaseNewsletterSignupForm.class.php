<?php

/**
 * NewsletterSignup form base class.
 *
 * @method NewsletterSignup getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseNewsletterSignupForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'email' => new sfWidgetFormInputText(),
      'name'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorPropelChoice(array('model' => 'NewsletterSignup', 'column' => 'id', 'required' => false)),
      'email' => new sfValidatorString(array('max_length' => 255)),
      'name'  => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('newsletter_signup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NewsletterSignup';
  }


}
