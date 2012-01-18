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
      'title'          => new sfWidgetFormInputText(),
      'homepage_text'  => new sfWidgetFormTextarea(),
      'start_date'     => new sfWidgetFormJQueryDate(),
      'end_date'       => new sfWidgetFormJQueryDate(),
      'is_active'      => new sfWidgetFormInputCheckbox(),

      'category_ids'     => new sfWidgetFormInputText(),
      'collector_ids'    => new sfWidgetFormInputText(),
      'collection_ids'   => new sfWidgetFormInputText(),
      'collectible_ids'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'title'          => new sfValidatorString(array('max_length' => 50, 'required' => true)),
      'homepage_text'  => new sfValidatorString(array('max_length' => 140, 'required' => true)),
      'start_date'     => new sfValidatorDate(array('required' => true)),
      'end_date'       => new sfValidatorDate(array('required' => false)),
      'is_active'      => new sfValidatorBoolean(),

      'category_ids'     => new sfValidatorString(array('required' => false)),
      'collector_ids'    => new sfValidatorString(array('required' => false)),
      'collection_ids'   => new sfValidatorString(array('required' => false)),
      'collectible_ids'  => new sfValidatorString(array('required' => false))
    ));

    if ($featured = $this->getObject())
    {
      $this->setDefault('category_ids', implode(', ', $featured->getCategoryIds()));
      $this->setDefault('collector_ids', implode(', ', $featured->getCollectorIds()));
      $this->setDefault('collection_ids', implode(', ', $featured->getCollectionIds()));
      $this->setDefault('collectible_ids', implode(', ', $featured->getCollectibleIds()));
    }

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

    $category_ids = explode(',', $values['category_ids']);
    foreach ($category_ids as $category_id)
    {

    }

    return $object;
  }
}
