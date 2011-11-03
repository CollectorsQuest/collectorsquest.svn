<?php

/**
 * wpPostMeta filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BasewpPostMetaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_id'    => new sfWidgetFormPropelChoice(array('model' => 'wpPost', 'add_empty' => true)),
      'meta_key'   => new sfWidgetFormFilterInput(),
      'meta_value' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'post_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'wpPost', 'column' => 'id')),
      'meta_key'   => new sfValidatorPass(array('required' => false)),
      'meta_value' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_post_meta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpPostMeta';
  }

  public function getFields()
  {
    return array(
      'meta_id'    => 'Number',
      'post_id'    => 'ForeignKey',
      'meta_key'   => 'Text',
      'meta_value' => 'Text',
    );
  }
}
