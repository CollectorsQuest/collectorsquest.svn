<?php
/**
 * Wrapper for the account status checking responses. It builds the JSON response which is sent
 * back to the identity toolkit widget.
 */

class gitAccountStatusResponse extends gitAbstractResponse {

  private $registered;
  private $legacy;
  private $displayName;
  private $photoUrl;

  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }

  public function setPhotoUrl($photoUrl) {
    $this->photoUrl = $photoUrl;
  }

  public function setLegacy($legacy) {
    $this->legacy = $legacy;
  }

  public function setRegistered($registered) {
    $this->registered = $registered;
  }

  public function toJson() {
    $json = array();
    if (!empty($this->displayName)) {
      $json['displayName'] = $this->displayName;
    }
    if (!empty($this->photoUrl)) {
      $json['photoUrl'] = $this->photoUrl;
    }
    $json['registered'] = $this->registered;
    $json['legacy'] = $this->legacy;
    return json_encode($json);
  }
}
