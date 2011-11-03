<?php

/**
 * CollectionCategory form.
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class CollectionCategoryForm extends BaseCollectionCategoryForm
{
  public function configure()
  {
    $this->widgetSchema['tags'] = new sfWidgetFormInput();
    $this->validatorSchema['tags'] = new sfValidatorString(array('required' => true));

    $this->setDefault('tags', $this->getObject()->getTagsString());
  }

  public function save($con = null)
  {
    $object = parent::save($con);
    $object->setTags($this->getValue('tags'));
    $object->save();

    return $object;
  }
}
