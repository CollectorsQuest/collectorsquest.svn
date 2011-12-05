<?php

class cqUser extends sfBasicSecurityUser
{
  /** @var Collector */
  private static $collector = null;

  /** @var array */
  protected static $_facebook_data = null;

  public function __construct(sfEventDispatcher $dispatcher, sfStorage $storage, $options = array())
  {
    parent::__construct($dispatcher, $storage, $options);

    self::$_facebook_data = $this->getAttribute('data', null, 'icepique/user/facebook');
  }

  /**
   * @return integer
   */
  public function getId()
  {
    if ($this->isAuthenticated() && ($collector = $this->getCollector()))
    {
      return $collector->getId();
    }

    return 0;
  }

  /**
   * @return string
   */
  public function getSlug()
  {
    if ($this->isAuthenticated() && ($collector = $this->getCollector()))
    {
      return $collector->getSlug();
    }

    return 'n-a';
  }

  public function Authenticate($boolean, $collector = null, $remember = false)
  {
    if ($collector === null)
    {
      $collector = $this->getCollector();
    }

    if ($collector instanceof Collector)
    {
      $this->clearCredentials();
      $this->getAttributeHolder()->removeNamespace('collector');
      $this->getAttributeHolder()->removeNamespace('seller');

      if ($boolean == true)
      {
        $this->addCredential(strtolower($collector->getUserType()));

        $this->setAttribute('id', $collector->getId(), 'collector');
        $this->setAttribute('profile_id', $collector->getProfile()->getId(), 'collector');
        $this->setAttribute('username', $collector->getUsername(), 'collector');
        $this->setAttribute('email', $collector->getEmail(), 'collector');
        $this->setAttribute('user_type', $collector->getUserType(), 'collector');

        if ($remember)
        {
          $cookie = serialize(array('username' => $collector->getUsername(), 'password' => $collector->getSha1Password()));
          setCookie('remember', $cookie, time()+60*60*24*14, '/', str_replace('http://www', '', sfConfig::get('app_cq_www_domain')));
        }

        self::$collector = $collector;
        $this->setAuthenticated(true);
      }
      else if ($boolean == false)
      {
        $this->setAuthenticated(false);

        setCookie('remember', null, 0, '/', str_replace('http://www', '', sfConfig::get('app_cq_www_domain')));
        $_COOKIE['remember'] = null;

        self::$collector = null;
      }

      if (!$collector->isNew())
      {
        $collector->setLastSeenAt(time());
        $collector->setSessionId(($boolean == true) ? session_id() : null);
        $collector->save();
      }
    }

    return true;
  }

  public function isAuthenticated()
  {
    $authenticated = parent::isAuthenticated();

    if (!$authenticated)
    {
      if (isset($_COOKIE['remember']) && $cookie = $_COOKIE['remember'])
      {
        $cookie = @unserialize($cookie);

        $c = new Criteria();
        $c->add(CollectorPeer::USERNAME, $cookie['username']);
        $collector = CollectorPeer::doSelectOne($c);

        // collector exists and password OK?
        if ($collector && $cookie['password'] == $collector->getSha1Password())
        {
          $authenticated = $this->Authenticate(true, $collector);
        }
        else
        {
          setCookie('remember', null, 0, '/');
          $_COOKIE['remember'] = null;
        }
      }
    }

    return $authenticated;
  }

  /**
   * @return null|Collector
   */
  public function getCollector()
  {
    if (!(self::$collector instanceof Collector))
    {
      if (self::$collector === null && ($this->getAttribute("id", null, "collector") !== null))
      {
        self::$collector = CollectorPeer::retrieveByPK($this->getAttribute("id", null, "collector"));
      }
      else
      {
        self::$collector = new Collector();
        self::$collector->setId(-1);
      }
    }
    else if (self::$collector->getId() == -1 && $this->getAttribute("id", null, "collector") !== null)
    {
      self::$collector = CollectorPeer::retrieveByPK($this->getAttribute("id", null, "collector"));
    }

    return self::$collector;
  }

  /**
   * Sets a flash variable that will be passed to the very next action.
   *
   * @param  string  $name       The name of the flash variable
   * @param  string  $value      The value of the flash variable
   * @param  bool    $persist    true if the flash have to persist for the following request (true by default)
   * @param  string  $namespace
   */
  public function setFlash($name, $value, $persist = true, $namespace = 'symfony/user/sfUser')
  {
    if (!$this->options['use_flash'])
    {
      return;
    }

    $this->setAttribute($name, $value, $namespace.'/flash');

    if ($persist)
    {
      // clear removal flag
      $this->attributeHolder->remove($name, null, $namespace.'/flash/remove');
    }
    else
    {
      $this->setAttribute($name, true, $namespace.'/flash/remove');
    }
  }

  /**
   * Gets a flash variable.
   *
   * @param  string   $name       The name of the flash variable
   * @param  string   $default    The default value returned when named variable does not exist.
   * @param  boolean  $delete     Whether to delete the flash after we get the value
   * @param  string   $namespace
   *
   * @return mixed The value of the flash variable
   */
  public function getFlash($name, $default = null, $delete = false, $namespace = 'symfony/user/sfUser')
  {
    if (!$this->options['use_flash'])
    {
      return $default;
    }

    $value = $this->getAttribute($name, $default, $namespace.'/flash');

    if ($delete == true)
    {
      // clear removal flag and value
      $this->attributeHolder->remove($name, null, $namespace.'/flash/remove');
      $this->attributeHolder->remove($name, null, $namespace.'/flash');
    }

    return $value;
  }

  /**
   * Returns true if a flash variable of the specified name exists.
   *
   * @param  string  $name      The name of the flash variable
   * @param  string  $namespace
   *
   * @return bool true if the variable exists, false otherwise
   */
  public function hasFlash($name, $namespace = 'symfony/user/sfUser')
  {
    if (!$this->options['use_flash'])
    {
      return false;
    }

    return $this->hasAttribute($name, $namespace.'/flash');
  }

  public function getFacebook($credentials = array(), $cookie = true)
  {
    if (empty($credentials))
    {
      $credentials = sfConfig::get('app_api_facebook');
    }

    $facebook = new Facebook(array(
      'appId'  => $credentials['application_id'],
      'secret' => $credentials['application_secret'],
      'cookie' => $cookie
    ));

    return $facebook;
  }

  public function isFacebookAuthenticated()
  {
    return ($this->getFacebookSession() && $this->getFacebookId()) ? true : false;
  }

  public function getFacebookSession()
  {
    if ($facebook = $this->getFacebook())
    {
      return $facebook->getSession();
    }

    return null;
  }

  public function getFacebookData()
  {
    if (self::$_facebook_data == null)
    {
      $facebook = $this->getFacebook();

      if ($facebook && $facebook->getSession())
      {
        try {
          self::$_facebook_data = $facebook->api('/me');
        }
        catch (FacebookApiException $e)
        {
          ;
        }
      }

      $this->setAttribute('data', self::$_facebook_data, 'icepique/user/facebook');
    }

    return self::$_facebook_data;
  }

  public function getFacebookId()
  {
    $data = $this->getFacebookData();

    return (isset($data['id'])) ? $data['id'] : null;
  }

  public function __call($m, $a)
  {
    $collector = $this->getCollector();

    if ($collector && method_exists($collector, $m))
    {
      return call_user_func_array(array($collector, $m), $a);
    }
    else
    {
      return parent::__call($m, $a);
    }
  }
}
