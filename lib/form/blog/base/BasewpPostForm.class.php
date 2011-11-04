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
      'post_category'         => new sfWidgetFormInputText(),
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
      'post_parent'           => new sfWidgetFormInputText(),
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
      'post_content'          => new sfValidatorString(array('required' => false)),
      'post_title'            => new sfValidatorString(array('required' => false)),
      'post_excerpt'          => new sfValidatorString(array('required' => false)),
      'post_category'         => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'post_status'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'comment_status'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ping_status'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'post_password'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'post_name'             => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'to_ping'               => new sfValidatorString(array('required' => false)),
      'pinged'                => new sfValidatorString(array('required' => false)),
      'post_modified'         => new sfValidatorDateTime(array('required' => false)),
      'post_modified_gmt'     => new sfValidatorDateTime(array('required' => false)),
      'post_content_filtered' => new sfValidatorString(array('required' => false)),
      'post_parent'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'guid'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'menu_order'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'post_type'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'post_mime_type'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'comment_count'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
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
