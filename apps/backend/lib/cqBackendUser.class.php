<?php

class cqBackendUser extends IceBackendUser
{
  public function getId()
  {
    $id = 1;

    if ($this->getGuardUser())
    {
      $id = $this->getGuardUser()->getId();
    }

    return $id;
  }

  public function beginAuthentication($trust_url, $return_url = 'http://backend.collectorsquest.com/openid')
  {
    $this->_doIncludes();

    $store = new Auth_OpenID_FileStore(sys_get_temp_dir());
    $consumer = new Auth_OpenID_Consumer($store);

    // Apply the changes for Google Apps OpenID
    new GApps_OpenID_Discovery($consumer);

    // Start the procedure...
    $auth_request = $consumer->begin('collectorsquest.com');
    $redirect_url = $auth_request->redirectURL($trust_url, $return_url);

    if (Auth_OpenID::isFailure($redirect_url))
    {
      return false;
    }
    else
    {
      return $redirect_url;
    }
  }

  public function completeAuthentication($return_to = 'http://backend.collectorsquest.com/openid')
  {
    return parent::completeAuthentication($return_to);
  }
}
