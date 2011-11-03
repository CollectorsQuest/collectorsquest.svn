<?php

/**
 * general actions.
 *
 * @package    CollectorsQuest
 * @subpackage general
 * @author     Kiril Angov
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class generalActions extends cqActions
{
  /**
   * Executes index action
   *
   * @param  sfWebRequest  $request A request object
   * @return string
   */
  public function executeIndex(sfWebRequest $request)
  {
    // Get the latest Blog post and its first image
    $blog_posts = wpPostPeer::getLatestPosts(6);
    $blog_post = array_shift($blog_posts);

    $pattern = '/<img[^>]+src[\\s=\'"]+([^"\'>\\s]+)/is';
    $blog_image = null;

    $q = new MultimediaQuery();
    $q->filterByModel('wpPost')
      ->filterByModelId($blog_post->getId())
      ->filterByType('image')
      ->filterByIsPrimary(true);

    if (!$blog_image = $q->findOne())
    {
      // Find the first image in the article
      preg_match($pattern, $blog_post->getPostContent(), $match);

      if (isset($match[1]))
      {
        if (cqStatic::isUrl($match[1]))
        {
          $blog_image = MultimediaPeer::createMultimediaFromUrl($blog_post, $match[1]);
        }
        else
        {
          $filename = sfConfig::get('sf_web_dir') . '/' . $match[1];
          $blog_image = MultimediaPeer::createMultimediaFromFile($blog_post, $filename);
        }

        if ($blog_image instanceof Multimedia)
        {
          $blog_image->setIsPrimary(true);
          $blog_image->makeThumb('300x225', 'shave');
          $blog_image->save();
        }
      }
    }

    $this->blog_post = $blog_post;
    $this->blog_content = strip_tags(str_replace(
      array('[/caption]', '[caption', ']'), array('</caption>', '<caption', '>'), $blog_post->getPostContent()
    ));
    $this->blog_image = $blog_image;
    $this->blog_posts = $blog_posts;

    $c = new Criteria();
    $c->addDescendingOrderByColumn(CollectionPeer::CREATED_AT);
    $c->setLimit(5);
    $this->latest_collections = CollectionPeer::doSelect($c);

    // Video
    $c = new Criteria();
    $c->add(VideoPeer::IS_PUBLISHED, true);
    $c->addJoin(VideoPeer::ID, VideoPlaylistPeer::VIDEO_ID, Criteria::RIGHT_JOIN);
    $c->add(VideoPlaylistPeer::PLAYLIST_ID, array(1, 4), Criteria::IN);
    $c->addDescendingOrderByColumn('RAND()');
    $this->featured_video = VideoPeer::doSelectOne($c);

    $c->clear();
    $c->add(VideoPeer::IS_PUBLISHED, true);
    $c->addDescendingOrderByColumn(VideoPeer::PUBLISHED_AT);
    $c->setLimit(5);
    $this->latest_videos = VideoPeer::doSelect($c);

    // Featured Week
    if (!$this->featured_week = FeaturedPeer::getCurrentFeatured(FeaturedPeer::TYPE_FEATURED_WEEK))
    {
      $this->featured_week = FeaturedPeer::getLatestFeatured(FeaturedPeer::TYPE_FEATURED_WEEK);
    }
    if ($this->featured_week instanceof Featured)
    {
      $this->featured_collectible = $this->featured_week->getHomepageCollectible();
    }

    // We want to show 100 tags on the bottom of the homepage, mainly for SEO
    $this->collection_tags = CollectionPeer::getPopularTags(100);

    return sfView::SUCCESS;
  }

  public function executeLogin(sfWebRequest $request)
  {
    // Try to auto-login the collector if a hash was provided
    if ($collector = CollectorPeer::retrieveByHash($request->getParameter('hash')))
    {
      $this->getUser()->Authenticate(true, $collector, true);

      // redirect to last page
      return $this->redirect($request->getParameter('goto', '@community'));
    }
    else if ($email = $this->getRequestParameter('email'))
    {
      $c = new Criteria();
      $c->add(CollectorPeer::EMAIL, $email);
      $collector = CollectorPeer::doSelectOne($c);

      if ($collector)
      {
        $password = cqStatic::generatePassword();
        $collector->setPassword($password);
        $collector->save();

        $to = $collector->getEmail();
        $subject = $this->__('Your new password for CollectorsQuest.com');
        $body = $this->getPartial(
            'emails/collector_password_reminder', array('collector' => $collector, 'password' => $password)
        );

        if ($this->sendEmail($to, $subject, $body))
        {
          $this->getUser()->setFlash('success', $this->__('We have sent an email to %email% with your new password.', array('%email%' => $to)));
        }
        else
        {
          $this->getUser()->setFlash('error', $this->__('There was a problem sending an email. Please try again a little bit later!'));
        }
      }
      else
      {
        $this->getUser()->setFlash("error", 'We could not find this email address as a valid collector!');
      }
    }

    // Create the login form
    $form = new CollectorLoginForm();

    if ($request->isMethod('post'))
    {
      $form->bind(array(
        'username' => $request->getParameter('username'),
        'password' => $request->getParameter('password'),
      ));

      // handle the form submission
      $username = $this->getRequestParameter('username');
      $password = $this->getRequestParameter('password');

      $c = new Criteria();
      $c->add(CollectorPeer::USERNAME, $username);
      $collector = CollectorPeer::doSelectOne($c);

      // collector exists?
      if ($collector)
      {
        // password is OK?
        if (sha1($collector->getSalt() . $password) == $collector->getSha1Password())
        {
          $this->getUser()->Authenticate(true, $collector, $this->getRequestParameter('remember'));

          $welcomePage = $request->getReferer();
          if (!$welcomePage || $welcomePage == $request->getUri())
          {
            $welcomePage = $request->getReferer($this->getUser()->isAuthenticated() && $this->getUser()->hasCredential('seller') ? '@marketplace' : '@community');
          }
          
          $goto = $this->getUser()->getAttribute('return_url', $request->getParameter('goto', $welcomePage), 'system');
          $this->getUser()->setAttribute('return_url', null, 'system');

          // redirect to last page
          $this->redirect(!empty($goto) ? $goto : '@homepage');
        }
      }

      $this->getUser()->setFlash(
        "error", sprintf(
          '%s <a href="%s">%s</a>', $this->__("This username/password combination is not valid."), '#reminder', $this->__("Forgot your username or password?")
        ));
    }

    $this->form = $form;

    $url = $this->getUser()->getAttribute('return_url', $request->getParameter('goto'), 'system');
    $this->getUser()->setAttribute('return_url', $url, 'system');

    // Building the breadcrumbs and page title
    $this->addBreadcrumb($this->__('Sign in to Your Account'));
    $this->prependTitle($this->__('Sign in to Your Account'));

    return sfView::SUCCESS;
  }

  public function executePassword()
  {
    $this->redirectIf($this->getUser()->isAuthenticated(), "@community");

    return sfView::SUCCESS;
  }

  public function executeLogout()
  {
    $this->getUser()->Authenticate(false);

    $this->redirect('@community');
  }

  public function executeRPXToken(sfWebRequest $request)
  {
    $token = $request->getParameter('token');
    $this->forward404Unless($token);

    include_once sfConfig::get('sf_lib_dir') . '/vendor/RPX.class.php';

    try
    {
      $rpx = new RPX();
      $rpx->auth_info($token);

      $status = 'success';
    }
    catch (RPXException $e)
    {
      $status = 'failed';
    }

    if ($status == 'success' && !empty($rpx->identifier))
    {
      $c = new Criteria();
      $c->addJoin(CollectorPeer::ID, CollectorIdentifierPeer::COLLECTOR_ID);
      $c->add(CollectorIdentifierPeer::IDENTIFIER, $rpx->identifier);

      if ($collector = CollectorPeer::doSelectOne($c))
      {
        $this->getUser()->Authenticate(true, $collector, true);

        return $this->redirect('community/spotlight');
      }
      else
      {
        // Automatically create an account for the informatio we got back from RPX
        $collector = CollectorPeer::createFromRPX($rpx);

        if ($collector)
        {
          $this->getUser()->Authenticate(true, $collector, true);
          return $this->redirect('community/spotlight');
        }
      }
    }

    return sfView::ERROR;
  }

  public function executeComingSoon()
  {
    // Building the breadcrumbs and page title
    $this->addBreadcrumb($this->__('Coming Soon'));
    $this->prependTitle($this->__('Coming Soon'));

    return sfView::SUCCESS;
  }

  public function executeError404()
  {
    // Building the breadcrumbs and page title
    $this->addBreadcrumb($this->__('Page Not Found'));
    $this->prependTitle($this->__('Page Not Found'));

    return sfView::SUCCESS;
  }

  public function executeError50x()
  {
    // Building the breadcrumbs and page title
    $this->addBreadcrumb($this->__('Unexpected Error'));
    $this->prependTitle($this->__('Unexpected Error'));

    return sfView::SUCCESS;
  }

}
