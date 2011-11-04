<?php

/**
 * NewsletterSignup filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseNewsletterSignupFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'email' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'email' => new sfValidatorPass(array('required' => false)),
      'name'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('newsletter_signup_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NewsletterSignup';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'email' => 'Text',
      'name'  => 'Text',
    );
  }
}
