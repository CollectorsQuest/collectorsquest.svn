<?php

class CollectibleEditForm extends BaseCollectibleForm
{
  public function configure()
  {
    parent::configure();

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', true);

    $collectible = $this->getObject();

    $this->getWidgetSchema()->setFormFormatterName('frontend');
    $this->validatorSchema['slug'] = new sfValidatorPass();

    $this->widgetSchema['thumbnail'] = new sfWidgetFormInputFile();
    $this->validatorSchema['thumbnail'] = new sfValidatorFile(array('required' => false));

    $this->widgetSchema['tags'] = new sfWidgetFormChoice(array('choices'=>array()));
    $this->validatorSchema['tags'] = new sfValidatorPass(array('required'=>true));

    unset($this->widgetSchema['position'], $this->widgetSchema['score']);
    unset($this->validatorSchema['position'], $this->validatorSchema['score']);
  }

  public function updateDescriptionColumn($value)
  {
    $this->getObject()->setDescription($value, 'html');
  }

  protected function saveFile($field, $filename = null, sfValidatedFile $file = null)
  {
    parent::saveFile($field, $filename, $file);

    if ('thumbnail' == $field)
    {
      $this->getObject()->addMultimedia($filename, true);
    }
  }

  public function save($con = null)
  {
    /** @var $object Collectible */
    $object = parent::save($con);
    $values = $this->getValues();

    $object->setDescription($values['description'], 'html');

    if ($this->getValue('thumbnail'))
    {
      $collection = $object->getCollection();
      if (!$collection->hasThumbnail())
      {
        $collection->setThumbnail($this->getValue('thumbnail')->getTempName());
        $collection->save();
      }

      $object->addMultimedia($this->getValue('thumbnail'), true);
    }

    if ($values['tags'])
    {
      $object->setTags($values['tags']);
    }

    $object->save();

    return $object;
  }

}
