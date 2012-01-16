<?php

/**
 * collector actions.
 *
 * @package    CollectorsQuest
 * @subpackage collector
 * @author     Kiril Angov
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class collectorActions extends cqActions
{
  private $_facebook_fields = array(
    array('name' => 'name'),
    array('name' => 'email'),
    array('name' => 'gender'),
    array('name' => 'birthday'),
    array('name' => 'location'),
    array('name' => 'password'),
    array('name' => 'captcha'),
  );

  /**
   * Executes index action
   *
   * @param  sfWebRequest  $request  A request object
   * @return string
   */
  public function executeIndex(sfWebRequest $request)
  {
    /** @var $collector Collector */
    $collector = $this->getRoute()->getObject();

    /**
     * Special checks for the Collectibles of A&E
     */
    $pawn_stars = sfConfig::get('app_aent_pawn_stars');
    $american_pickers = sfConfig::get('app_aent_american_pickers');

    if (in_array($collector->getId(), array($pawn_stars['collector'], $american_pickers['collector'])))
    {
      $this->plural = true;
    }
    else
    {
      $this->plural = false;
    }

    if ($collector->getId() == $this->getUser()->getCollector()->getId())
    {
      $request->setAttribute('header_icons_active', 'profile');
    }

    $this->addBreadcrumb($this->__('Community'), '@community');
    $this->addBreadcrumb($this->__('Collectors'), '@collectors');
    $this->addBreadcrumb($collector->getDisplayName());

    $this->collector = $collector;
    $this->collector_profile = $collector->getProfile();

    $this->related_collections = $collector->getRelatedCollections(10, $this->rnd_flag);
    $this->count_collections = $collector->countCollections();
    $this->collections = $collector->getRecentCollections(3);

    // Building the title
    $this->prependTitle($collector->getDisplayName());

    // Building the meta tags
    $this->getResponse()->addMeta('description', $this->collector_profile->getAbout());
    $this->getResponse()->addMeta('keywords', $this->collector_profile->getInterests());

    // Building the geo.* meta tags
    $this->getResponse()->addGeoMeta($collector);

    // Setting the Canonical URL
    $this->loadHelpers(array('cqLinks'));
    $this->getResponse()->setCanonicalUrl(url_for_collector($collector, true));

    return sfView::SUCCESS;
  }

  public function executeMe(sfWebRequest $request)
  {
    if ($collector = $this->getCollector())
    {
      $id   = $collector->getId();
      $slug = $collector->getSlug();

      $this->redirect('@collector_by_id?id='. $id .'&slug='. $slug);
    }

    $this->redirect('@login');
  }

  /**
   * @param  sfWebRequest  $request
   * @return string
   */
  public function executeSignup(sfWebRequest $request)
  {
    // Redirect to the community if already signed up
    $this->redirectIf($this->getUser()->isAuthenticated(), "@manage_collections");

    $this->snStep = $request->getParameter('step', 1);

    if ($this->snStep == 1)
    {
      $form = new CollectorSignupStep1Form();
    }
    else if ($this->snStep == 2)
    {
      $form = new CollectorSignupStep2Form();
    }
    else
    {
      $form = new CollectorSignupStep3Form();
    }

    $amStep1Data = $request->getParameter('first_step_data', base64_encode(serialize($request->getParameter('collectorstep1', array()))));
    $amStep1Data = @unserialize(base64_decode($amStep1Data));

    $amStep2Data = $request->getParameter('second_step_data', base64_encode(serialize($request->getParameter('collectorstep2', array()))));
    $amStep2Data = @unserialize(base64_decode($amStep2Data));

    $amStep3Data = $request->getParameter('third_step_data', base64_encode(serialize($request->getParameter('collectorstep2', array()))));
    $amStep3Data = @unserialize(base64_decode($amStep3Data));

    $facebook = $this->getUser()->getFacebook();

    if (($signed_request = $facebook->getSignedRequest()) && !empty($signed_request['oauth_token']))
    {
      // We need to make an extra check for the valid registration fields
      if (json_encode($this->_facebook_fields) === @$signed_request['registration_metadata']['fields'])
      {
        $params = $signed_request['registration'];

        $amStep1Data['username'] = uniqid('fb');
        $amStep1Data['facebook_id'] = $signed_request['user_id'];
        $amStep1Data['password'] = $params['password'];
        $amStep1Data['email'] = $params['email'];
        $amStep1Data['display_name'] = $params['name'];

        $amStep3Data['gender'] = ucfirst($params['gender']);
        $amStep3Data['birthday'] = $params['birthday'];
        $amStep3Data['country'] = $signed_request['user']['country'];
      }

      /*
        array(8) {
          ["algorithm"]=>
          string(11) "HMAC-SHA256"
          ["expires"]=>
          int(1326135600)
          ["issued_at"]=>
          int(1326130050)
          ["oauth_token"]=>
          string(111) "<!-- Edited -->"
          ["registration"]=>
          array(6) {
            ["name"]=>
            string(11) "Kiril Angov"
            ["email"]=>
            string(20) "kupokomapa@gmail.com"
            ["gender"]=>
            string(4) "male"
            ["birthday"]=>
            string(10) "03/25/1983"
            ["location"]=>
            array(2) {
              ["name"]=>
              string(15) "Sofia, Bulgaria"
              ["id"]=>
              float(1.0601348277267E+14)
            }
            ["password"]=>
            string(8) "123456789"
          }
          ["registration_metadata"]=>
          array(1) {
            ["fields"]=>
            string(131) "[{"name":"name"},{"name":"email"},{"name":"gender"},{"name":"birthday"},{"name":"location"},{"name":"password"},{"name":"captcha"}]"
          }
          ["user"]=>
          array(2) {
            ["country"]=>
            string(2) "bg"
            ["locale"]=>
            string(5) "bg_BG"
          }
          ["user_id"]=>
          string(8) "74502459"
        }
      */
    }
    else if ($request->isMethod('post'))
    {
      $params = $request->getParameter($form->getName());

      // Bind the POST variables to the form object for validation and sanitation
      $form->bind($params);

      if ($form->isValid())
      {
        if ($this->snStep != 3)
        {
          $snNextStep = $this->snStep + 1;
          $ssFormName = 'CollectorSignupStep' . $snNextStep . 'Form';

          return $this->renderPartial('collector/signupStep' . $snNextStep, array('form' => new $ssFormName(), 'amStep1Data' => $amStep1Data, 'amStep2Data' => $amStep2Data));
        }

        $amStep3Data = $request->getParameter($form->getName());
        $amUserData = array(
          'username' => $amStep1Data['username'],
          'facebook_id' => $amStep1Data['facebook_id'],
          'display_name' => $amStep1Data['display_name'],
          'password' => $amStep1Data['password'],
          'email' => $amStep1Data['email'],
          'collector_type' => $amStep2Data['collector_type'],
          'what_you_collect' => $amStep2Data['what_you_collect'],
          'purchase_per_year' => $amStep2Data['purchase_per_year'],
          'most_expensive_item' => $amStep2Data['most_expensive_item'],
          'annually_spend' => $amStep2Data['annually_spend'],
          'birthday' => $amStep3Data['birthday'],
          'gender' => $amStep3Data['gender'],
          'zip_postal' => $amStep3Data['zip_postal'],
          'country' => $amStep3Data['country'],
          'website' => $amStep3Data['website'],
        );

        // Create the collector, based on the submited data
        if ($collector = CollectorPeer::saveUserDataFromArray($amUserData))
        {
          $this->getUser()->Authenticate(true, $collector, false);

          // Create the default profile photo
          // $images = sfFinder::type('file')->name('*.jpg')->in(sfConfig::get('sf_web_dir').'/images/frontend/multimedia/Collector/default');
          // $collector->setPhoto($images[array_rand($images)]);

          // Send the welcome message
          PrivateMessagePeer::sendFromTemplate(
            PrivateMessageTemplatePeer::COLLECTOR_SIGNUP_WELCOME, $collector->getId(), 1, array()
          );

          return $this->redirect('@manage_profile');
        }
      }
    }

    $form->setDefaults(array_merge($amStep1Data, $amStep2Data, $amStep3Data));

    $this->amStep1Data = $amStep1Data;
    $this->amStep2Data = $amStep2Data;
    $this->amStep3Data = $amStep3Data;
    $this->form = $form;

    $this->buttons = array(
      0 => array(
        'text' => 'Use Another Web ID',
        'icon' => 'person',
        'route' => '@collector_signup#openid'
      ),
      1 => array(
        'text' => 'Are you a Seller?',
        'icon' => 'person',
        'route' => '@seller_signup'
      )
    );

    $this->addBreadcrumb($this->__('Sign Up for a Collector Account'));
    $this->prependTitle($this->__('Sign Up for a Collector Account'));

    return sfView::SUCCESS;
  }

  public function executeSignupFacebook()
  {
    $this->fields = $this->_facebook_fields;

    $this->addBreadcrumb($this->__('Sign Up for a Collector Account'));
    $this->prependTitle($this->__('Sign Up for a Collector Account'));

    return sfView::SUCCESS;
  }

}
