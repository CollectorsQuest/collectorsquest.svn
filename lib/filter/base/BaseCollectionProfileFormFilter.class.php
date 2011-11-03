<?php

/**
 * CollectionProfile filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 22284 2009-09-23 12:29:01Z Kris.Wallsmith $
 */
class BaseCollectionProfileFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'collection_id'     => new sfWidgetFormPropelChoice(array('model' => 'Collection', 'add_empty' => true)),
      'collector_id'      => new sfWidgetFormPropelChoice(array('model' => 'Collector', 'add_empty' => true)),
      'collector_type'    => new sfWidgetFormFilterInput(),
      'avg_spending'      => new sfWidgetFormFilterInput(),
      'show_avg_spending' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'purchased_items'   => new sfWidgetFormFilterInput(),
      'most_spent'        => new sfWidgetFormFilterInput(),
      'show_most_spent'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'started'           => new sfWidgetFormFilterInput(),
      'finished'          => new sfWidgetFormFilterInput(),
      'tips'              => new sfWidgetFormFilterInput(),
      'favorite_items'    => new sfWidgetFormFilterInput(),
      'looking_for'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'collection_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collection', 'column' => 'id')),
      'collector_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Collector', 'column' => 'id')),
      'collector_type'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'avg_spending'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'show_avg_spending' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'purchased_items'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'most_spent'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'show_most_spent'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'started'           => new sfValidatorPass(array('required' => false)),
      'finished'          => new sfValidatorPass(array('required' => false)),
      'tips'              => new sfValidatorPass(array('required' => false)),
      'favorite_items'    => new sfValidatorPass(array('required' => false)),
      'looking_for'       => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('collection_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CollectionProfile';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'collection_id'     => 'ForeignKey',
      'collector_id'      => 'ForeignKey',
      'collector_type'    => 'Number',
      'avg_spending'      => 'Number',
      'show_avg_spending' => 'Boolean',
      'purchased_items'   => 'Number',
      'most_spent'        => 'Number',
      'show_most_spent'   => 'Boolean',
      'started'           => 'Text',
      'finished'          => 'Text',
      'tips'              => 'Text',
      'favorite_items'    => 'Text',
      'looking_for'       => 'Text',
      'created_at'        => 'Date',
    );
  }
}
