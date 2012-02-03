<?php

/**
 * wpUserMeta filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpUserMetaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'wpUser', 'add_empty' => true)),
      'meta_key'   => new sfWidgetFormFilterInput(),
      'meta_value' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpUser', 'column' => 'id')),
      'meta_key'   => new sfValidatorPass(array('required' => false)),
      'meta_value' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_user_meta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpUserMeta';
  }

  public function getFields()
  {
    return array(
      'umeta_id'   => 'Number',
      'user_id'    => 'ForeignKey',
      'meta_key'   => 'Text',
      'meta_value' => 'Text',
    );
  }
}
