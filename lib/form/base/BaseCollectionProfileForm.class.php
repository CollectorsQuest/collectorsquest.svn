<?php

/**
 * CollectionProfile form base class.
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 22262 2009-09-23 05:50:25Z fabien $
 */
class BaseCollectionProfileForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'collection_id'     => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'collector_id'      => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'collector_type'    => new sfWidgetFormInputText(),
      'avg_spending'      => new sfWidgetFormInputText(),
      'show_avg_spending' => new sfWidgetFormInputCheckbox(),
      'purchased_items'   => new sfWidgetFormInputText(),
      'most_spent'        => new sfWidgetFormInputText(),
      'show_most_spent'   => new sfWidgetFormInputCheckbox(),
      'started'           => new sfWidgetFormTextarea(),
      'finished'          => new sfWidgetFormTextarea(),
      'tips'              => new sfWidgetFormTextarea(),
      'favorite_items'    => new sfWidgetFormTextarea(),
      'looking_for'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorPropelChoice(array('model' => 'CollectionProfile', 'column' => 'id', 'required' => false)),
      'collection_id'     => new sfValidatorPropelChoice(array('model' => 'Collection', 'column' => 'id', 'required' => false)),
      'collector_id'      => new sfValidatorPropelChoice(array('model' => 'Collector', 'column' => 'id', 'required' => false)),
      'collector_type'    => new sfValidatorInteger(array('required' => false)),
      'avg_spending'      => new sfValidatorInteger(array('required' => false)),
      'show_avg_spending' => new sfValidatorBoolean(array('required' => false)),
      'purchased_items'   => new sfValidatorInteger(array('required' => false)),
      'most_spent'        => new sfValidatorInteger(array('required' => false)),
      'show_most_spent'   => new sfValidatorBoolean(array('required' => false)),
      'started'           => new sfValidatorString(array('required' => false)),
      'finished'          => new sfValidatorString(array('required' => false)),
      'tips'              => new sfValidatorString(array('required' => false)),
      'favorite_items'    => new sfValidatorString(array('required' => false)),
      'looking_for'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('collection_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionProfile';
  }


}
