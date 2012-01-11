<?php
/**
 * Wrapper for the request params.
 */

class gitLoginRequest {
  private $email;
  private $password;
  // Whether the email provider is also a IDP provider.
  private $domainFederated;
  // The account fetched from the relying party storage.
  private $account;

  public function __construct($email, $password) {
    $this->email = $email;
    $this->password = $password;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setAccount($account) {
    $this->account = $account;
  }

  public function getAccount() {
    return $this->account;
  }

  public function setDomainFederated($emailFederated) {
    $this->domainFederated = $emailFederated;
  }

  public function getDomainFederated() {
    return $this->domainFederated;
  }

  /**
   * @return string if the account exists return its account type otherwise return the intended
   * account type.
   */
  public function getAccountType() {
    if (!empty($this->account)) {
      return $this->getAccount()->getAccountType();
    } else {
      return $this->domainFederated ? gitAccount::FEDERATED : gitAccount::LEGACY;
    }
  }
}
