<?php

/**
 * wpPost form base class.
 *
 * @method wpPost getObject() Returns the current form's model object
 *
 * @package    CollectorsQuest
 * @subpackage form
 * @author     Collectors
 */
abstract class BasewpPostForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'post_author'           => new sfWidgetFormPropelChoice(array('model' => 'wpUser', 'add_empty' => false)),
      'post_date'             => new sfWidgetFormDateTime(),
      'post_date_gmt'         => new sfWidgetFormDateTime(),
      'post_content'          => new sfWidgetFormTextarea(),
      'post_title'            => new sfWidgetFormTextarea(),
      'post_excerpt'          => new sfWidgetFormTextarea(),
      'post_status'           => new sfWidgetFormInputText(),
      'comment_status'        => new sfWidgetFormInputText(),
      'ping_status'           => new sfWidgetFormInputText(),
      'post_password'         => new sfWidgetFormInputText(),
      'post_name'             => new sfWidgetFormInputText(),
      'to_ping'               => new sfWidgetFormTextarea(),
      'pinged'                => new sfWidgetFormTextarea(),
      'post_modified'         => new sfWidgetFormDateTime(),
      'post_modified_gmt'     => new sfWidgetFormDateTime(),
      'post_content_filtered' => new sfWidgetFormTextarea(),
      'post_parent'           => new sfWidgetFormPropelChoice(array('model' => 'wpPost', 'add_empty' => true)),
      'guid'                  => new sfWidgetFormInputText(),
      'menu_order'            => new sfWidgetFormInputText(),
      'post_type'             => new sfWidgetFormInputText(),
      'post_mime_type'        => new sfWidgetFormInputText(),
      'comment_count'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'post_author'           => new sfValidatorPropelChoice(array('model' => 'wpUser', 'column' => 'id')),
      'post_date'             => new sfValidatorDateTime(),
      'post_date_gmt'         => new sfValidatorDateTime(),
      'post_content'          => new sfValidatorString(),
      'post_title'            => new sfValidatorString(),
      'post_excerpt'          => new sfValidatorString(),
      'post_status'           => new sfValidatorString(array('max_length' => 20)),
      'comment_status'        => new sfValidatorString(array('max_length' => 20)),
      'ping_status'           => new sfValidatorString(array('max_length' => 20)),
      'post_password'         => new sfValidatorString(array('max_length' => 20)),
      'post_name'             => new sfValidatorString(array('max_length' => 200)),
      'to_ping'               => new sfValidatorString(),
      'pinged'                => new sfValidatorString(),
      'post_modified'         => new sfValidatorDateTime(),
      'post_modified_gmt'     => new sfValidatorDateTime(),
      'post_content_filtered' => new sfValidatorString(),
      'post_parent'           => new sfValidatorPropelChoice(array('model' => 'wpPost', 'column' => 'id', 'required' => false)),
      'guid'                  => new sfValidatorString(array('max_length' => 255)),
      'menu_order'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'post_type'             => new sfValidatorString(array('max_length' => 100)),
      'post_mime_type'        => new sfValidatorString(array('max_length' => 100)),
      'comment_count'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->widgetSchema->setNameFormat('wp_post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'wpPost';
  }


}
