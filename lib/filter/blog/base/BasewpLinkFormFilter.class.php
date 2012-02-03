<?php

/**
 * wpLink filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Collectors
 */
abstract class BasewpLinkFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'link_url'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_image'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_target'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_visible'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_owner'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_rating'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_updated'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'link_rel'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_notes'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_rss'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'link_url'         => new sfValidatorPass(array('required' => false)),
      'link_name'        => new sfValidatorPass(array('required' => false)),
      'link_image'       => new sfValidatorPass(array('required' => false)),
      'link_target'      => new sfValidatorPass(array('required' => false)),
      'link_description' => new sfValidatorPass(array('required' => false)),
      'link_visible'     => new sfValidatorPass(array('required' => false)),
      'link_owner'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'link_rating'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'link_updated'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'link_rel'         => new sfValidatorPass(array('required' => false)),
      'link_notes'       => new sfValidatorPass(array('required' => false)),
      'link_rss'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wp_link_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpLink';
  }

  public function getFields()
  {
    return array(
      'link_id'          => 'Number',
      'link_url'         => 'Text',
      'link_name'        => 'Text',
      'link_image'       => 'Text',
      'link_target'      => 'Text',
      'link_description' => 'Text',
      'link_visible'     => 'Text',
      'link_owner'       => 'Number',
      'link_rating'      => 'Number',
      'link_updated'     => 'Date',
      'link_rel'         => 'Text',
      'link_notes'       => 'Text',
      'link_rss'         => 'Text',
    );
  }
}
