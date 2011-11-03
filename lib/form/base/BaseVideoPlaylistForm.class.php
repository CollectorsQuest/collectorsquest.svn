<?php

/**
 * VideoPlaylist form base class.
 *
 * @method VideoPlaylist getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Kiril Angov
 */
abstract class BaseVideoPlaylistForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'video_id'    => new sfWidgetFormPropelChoice(array('model' => 'Video', 'add_empty' => true)),
      'playlist_id' => new sfWidgetFormPropelChoice(array('model' => 'Playlist', 'add_empty' => true)),
      'position'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'VideoPlaylist', 'column' => 'id', 'required' => false)),
      'video_id'    => new sfValidatorPropelChoice(array('model' => 'Video', 'column' => 'id', 'required' => false)),
      'playlist_id' => new sfValidatorPropelChoice(array('model' => 'Playlist', 'column' => 'id', 'required' => false)),
      'position'    => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('video_playlist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VideoPlaylist';
  }


}
