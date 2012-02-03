<?php

/**
 * wpOption filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpOptionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'option_value' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'autoload'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'option_value' => new sfValidatorPass(array('required' => false)),
      'autoload'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_option_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpOption';
  }

  public function getFields()
  {
    return array(
      'option_id'    => 'Number',
      'blog_id'      => 'Number',
      'option_name'  => 'Text',
      'option_value' => 'Text',
      'autoload'     => 'Text',
    );
  }
}
