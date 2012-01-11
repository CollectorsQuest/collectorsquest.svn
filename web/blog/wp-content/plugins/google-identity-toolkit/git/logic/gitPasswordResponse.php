<?php
/**
 * Wrapper for the legacy password checking responses. It builds the JSON response which is sent
 * back to the identity toolkit widget.
 */

class gitPasswordResponse extends gitAbstractResponse {
  const STATUS_OK = 'ok';
  const STATUS_PASSWORD_ERROR = 'passwordError';
  const STATUS_FEDERATED = 'federated';
  const STATUS_EMAIL_NOT_EXIST = 'emailNotExist';

  private $status;
  private $displayName;
  private $photoUrl;

  public function setStatus($status) {
    if (in_array($status, array(gitPasswordResponse::STATUS_OK,
      gitPasswordResponse::STATUS_PASSWORD_ERROR, gitPasswordResponse::STATUS_FEDERATED,
      gitPasswordResponse::STATUS_EMAIL_NOT_EXIST))) {
      $this->status = $status;
    }
  }

  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }

  public function setPhotoUrl($photoUrl) {
    $this->photoUrl = $photoUrl;
  }

  public function toJson() {
    $json = array();
    $json['status'] = $this->status;
    if (!empty($this->displayName)) {
      $json['displayName'] = $this->displayName;
    }
    if (!empty($this->photoUrl)) {
      $json['photoUrl'] = $this->photoUrl;
    }
    return json_encode($json);
  }
}
