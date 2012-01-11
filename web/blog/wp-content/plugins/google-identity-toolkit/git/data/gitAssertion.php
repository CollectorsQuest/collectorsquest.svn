<?php
/**
 * The assertion returned by the IDP.
 */
 
class gitAssertion {
  private $firstName;
  private $lastName;
  private $verifiedEmail;
  private $identifier;
  private $photoUrl;
  private $nickName;
  private $fullName;

  public function __construct($identifier, $verifiedEmail) {
    $this->identifier = $identifier;
    if (!empty($verifiedEmail)) {
      $this->verifiedEmail = strtolower($verifiedEmail);
    }
  }

  public function getIdentifier() {
    return $this->identifier;
  }

  public function getVerifiedEmail() {
    return $this->verifiedEmail;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

  public function getPhotoUrl() {
    return $this->photoUrl;
  }

  public function setPhotoUrl($photoUrl) {
    $this->photoUrl = $photoUrl;
  }

  public function getNickName() {
    return $this->nickName;
  }

  public function setNickName($nickName) {
    $this->nickName = $nickName;
  }

  public function getFullName() {
    return $this->fullName;
  }

  public function setFullName($fullName) {
    $this->fullName = $fullName;
  }

  public function getDisplayName() {
    if ($this->nickName != '') {
      return $this->nickName;
    } else if ($this->fullName != '') {
      return $this->fullName;
    } else if ($this->firstName != '') {
      return $this->firstName;
    } else if ($this->lastName != '') {
      return $this->lastName;
    }
    return '';
  }

  public function __toString() {
    $obj = array('verifiedEmail' => $this->verifiedEmail,
                 'firstName' => $this->firstName,
                 'lastName' => $this->lastName,
                 'fullName' => $this->fullName,
                 'nickName' => $this->nickName,
                 'identifier' => $this->identifier,
                 'photoUrl' => $this->photoUrl);
    return json_encode($obj);
  }
  
  public static function fromString($json) {
    $obj = json_decode($json);
    if (!empty($obj) && !empty($obj->identifier)) {
      $ret = new gitAssertion($obj->identifier, $obj->verifiedEmail);
      if (!empty($obj->firstName)) {
        $ret->setFirstName($obj->firstName);
      }
      if (!empty($obj->lastName)) {
        $ret->setLastName($obj->lastName);
      }
      if (!empty($obj->photoUrl)) {
        $ret->setPhotoUrl($obj->photoUrl);
      }
      if (!empty($obj->nickName)) {
        $ret->setNickName($obj->nickName);
      }
      if (!empty($obj->fullName)) {
        $ret->setFullName($obj->fullName);
      }
      return $ret;
    }
    return NULL;
  }
}
