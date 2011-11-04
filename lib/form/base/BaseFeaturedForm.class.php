<?php

/**
 * Featured form base class.
 *
 * @method Featured getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BaseFeaturedForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'featured_type_id' => new sfWidgetFormInputText(),
      'featured_model'   => new sfWidgetFormInputText(),
      'featured_id'      => new sfWidgetFormInputText(),
      'tree_left'        => new sfWidgetFormInputText(),
      'tree_right'       => new sfWidgetFormInputText(),
      'tree_scope'       => new sfWidgetFormInputText(),
      'eblob'            => new sfWidgetFormTextarea(),
      'start_date'       => new sfWidgetFormDate(),
      'end_date'         => new sfWidgetFormDate(),
      'is_active'        => new sfWidgetFormInputCheckbox(),
      'position'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorPropelChoice(array('model' => 'Featured', 'column' => 'id', 'required' => false)),
      'featured_type_id' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'featured_model'   => new sfValidatorString(array('max_length' => 64)),
      'featured_id'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_left'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tree_right'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tree_scope'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'eblob'            => new sfValidatorString(array('required' => false)),
      'start_date'       => new sfValidatorDate(array('required' => false)),
      'end_date'         => new sfValidatorDate(array('required' => false)),
      'is_active'        => new sfValidatorBoolean(),
      'position'         => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('featured[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Featured';
  }


}
