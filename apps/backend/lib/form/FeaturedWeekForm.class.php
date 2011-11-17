<?php

/**
 * Featured form.
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
class FeaturedWeekForm extends BaseFeaturedForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'title'            => new sfWidgetFormInputText(),
      'homepage_text'    => new sfWidgetFormTextarea(),
      'start_date'       => new sfWidgetFormDate(),
      'end_date'         => new sfWidgetFormDate(),
      'is_active'        => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'title'            => new sfValidatorString(array('max_length' => 50, 'required' => true)),
      'homepage_text'    => new sfValidatorString(array('max_length' => 140, 'required' => true)),
      'start_date'       => new sfValidatorDate(array('required' => true)),
      'end_date'         => new sfValidatorDate(array('required' => false)),
      'is_active'        => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('featured_week[%s]');
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
  }

  public function updateObject($values = null)
  {
    $object = parent::updateObject($values);

    if (null === $values)
    {
      $values = $this->values;
    }
    $object->title = $values['title'];
    $object->homepage_text = $values['homepage_text'];

    return $object;
  }
}
