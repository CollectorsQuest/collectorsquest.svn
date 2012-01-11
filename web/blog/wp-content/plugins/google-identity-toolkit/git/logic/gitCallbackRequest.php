<?php
/**
 * Wrapper for the request params.
 */

class gitCallbackRequest {
  private $assertion;
  private $purpose;
  private $inputEmail;
  private $account;

  public function __construct($inputEmail, $purpose, $assertion) {
    $this->assertion = $assertion;
    $this->purpose = $purpose;
    $this->inputEmail = $inputEmail;
  }

  public function getAssertion() {
    return $this->assertion;
  }

  public function getInputEmail() {
    return $this->inputEmail;
  }

  public function getPurpose() {
    return $this->purpose;
  }

  public function setAccount($account) {
    $this->account = $account;
  }

  public function getAccount() {
    return $this->account;
  }
}
