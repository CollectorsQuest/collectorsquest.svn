<?php

/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
class SingleCollectibleForm extends BaseCollectibleForm
{
  public function __construct($object = null, $options = array(), $CSRFSecret = null)
  {
    parent::__construct($object, $options, $CSRFSecret);
  }

  public function configure()
  {
    $this->useFields(array(
      'name',
      'description',
    ));

    $this->widgetSchema['name']->setAttribute('class', 'text');

    $this->setWidget('thumbnail', new sfWidgetFormInputFile());
    $this->setValidator('thumbnail', new sfValidatorFile(array('required' => false)));

    $this->setWidget('tags', new cqWidgetFormChoice(array(
        'choices' => $this->getObject()->getTags(),
        'label' => 'Tags / Keywords:',
      )));
    $this->setValidator('tags', new cqValidatorTags(array('required' => false)));
    $this->validatorSchema['description']->setOption('required', false);

    /** @var $user Collector */
    $user = $this->getOption('user', $this->getObject()->getCollector());

    if ($user->getUserType() == 'Seller')
    {
      $collectibleForSale = $this->getObject()->getForSaleInformation();

      if (!$collectibleForSale)
      {
        $collectibleForSale = new CollectibleForSale();
        $collectibleForSale->setCollectible($this->getObject());
      }

      $embedForm = new SingleCollectibleForSaleForm($collectibleForSale);

      $this->embedForm('for_sale', $embedForm);
    }

    $this->disableCSRFProtection();
  }

}
