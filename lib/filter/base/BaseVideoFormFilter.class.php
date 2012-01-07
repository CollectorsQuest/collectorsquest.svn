<?php

/**
 * Video filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BaseVideoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'         => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'length'       => new sfWidgetFormFilterInput(),
      'filename'     => new sfWidgetFormFilterInput(),
      'thumb_small'  => new sfWidgetFormFilterInput(),
      'thumb_large'  => new sfWidgetFormFilterInput(),
      'is_published' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'published_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'uploaded_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'title'        => new sfValidatorPass(array('required' => false)),
      'slug'         => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
      'type'         => new sfValidatorPass(array('required' => false)),
      'length'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'filename'     => new sfValidatorPass(array('required' => false)),
      'thumb_small'  => new sfValidatorPass(array('required' => false)),
      'thumb_large'  => new sfValidatorPass(array('required' => false)),
      'is_published' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'published_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'uploaded_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('video_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Video';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'title'        => 'Text',
      'slug'         => 'Text',
      'description'  => 'Text',
      'type'         => 'Text',
      'length'       => 'Number',
      'filename'     => 'Text',
      'thumb_small'  => 'Text',
      'thumb_large'  => 'Text',
      'is_published' => 'Boolean',
      'published_at' => 'Date',
      'uploaded_at'  => 'Date',
      'created_at'   => 'Date',
    );
  }
}
