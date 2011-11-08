<?php

/**
 * general actions.
 *
 * @package    CollectorsQuest
 * @subpackage collectors
 * @author     Kiril Angov
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class generalActions extends sfActions
{
  public function executeIndex()
  {
    return sfView::NONE;
  }

  public function executeGodAuth(sfWebRequest $request)
  {
    $secret = sfConfig::get('app_god_auth_secret');
    $timeout = sfConfig::get('app_god_auth_timeout');

    $user = 'kangov';
    $roles = 'developer';

    $value = $user .'-'. $roles .'-'. time();
    $cookie = $value .'-'. hash_hmac('sha1', $value .'-'. $_SERVER['HTTP_USER_AGENT'], $secret);

    setcookie("ga", $cookie, time()+$timeout, "/", ".collectorsquest.dev", 0, 1);

    $this->redirect($request->getParameter('ref', '@homepage'));
  }
}
