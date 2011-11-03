<?php

/**
 * VideoPlaylist filter form base class.
 *
 * @package    CollectorsQuest
 * @subpackage filter
 * @author     Kiril Angov
 */
abstract class BaseVideoPlaylistFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'video_id'    => new sfWidgetFormPropelChoice(array('model' => 'Video', 'add_empty' => true)),
      'playlist_id' => new sfWidgetFormPropelChoice(array('model' => 'Playlist', 'add_empty' => true)),
      'position'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'video_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Video', 'column' => 'id')),
      'playlist_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Playlist', 'column' => 'id')),
      'position'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('video_playlist_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VideoPlaylist';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'video_id'    => 'ForeignKey',
      'playlist_id' => 'ForeignKey',
      'position'    => 'Number',
    );
  }
}
