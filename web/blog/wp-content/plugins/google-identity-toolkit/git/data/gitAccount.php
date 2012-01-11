<?php
/**
 * The relying party account data model.
 */
 
class gitAccount {
  const FEDERATED = 'FEDERATED';
  const LEGACY = 'LEGACY';
  private $email;
  private $accountType;
  private $localId;
  private $displayName;
  private $photoUrl = '';

  public function __construct($email, $accountType) {
    $this->email = $email;
    $this->accountType = self::LEGACY;
    if ($accountType == self::FEDERATED) {
      $this->accountType = self::FEDERATED;
    }
  }

  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
  	$this->email = $email;
  }

  public function getAccountType() {
    return $this->accountType;
  }

  public function setAccountType($accountType) {
    if ($accountType == self::FEDERATED) {
      $this->accountType = self::FEDERATED;
    } else if ($accountType == self::LEGACY) {
      $this->accountType = self::LEGACY;
    }
  }

  public function getLocalId() {
    return $this->localId;
  }

  public function setLocalId($value) {
    $this->localId = $value;
  }

  public function getDisplayName() {
    return $this->displayName;

  }

  public function setDisplayName($value) {
    $this->displayName = $value;
  }

  public function getPhotoUrl() {
    return $this->photoUrl;
  }

  public function setPhotoUrl($value) {
    $this->photoUrl = $value;
  }
}
