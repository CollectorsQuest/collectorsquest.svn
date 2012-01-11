<?php
/**
 * The action class to set the legacy password JSON responses. The responses will be sent back to
 * the identity toolkit widget.
 */

class gitPasswordAction {
  private function setResponse($request, $response, $status) {
    $response->setStatus($status);
    $account = $request->getAccount();
    if (!empty($account)) {
      $displayName = $account->getDisplayName();
      if (!empty($displayName)) {
        $response->setDisplayName($displayName);
      }
      $photoUrl = $account->getPhotoUrl();
      if (!empty($photoUrl)) {
        $response->setPhotoUrl($photoUrl);
      }
    }
    $response->setOutput($response->toJson(), 'application/json');
  }

  public function sendEmailNotExist($request, $response) {
    $this->setResponse($request, $response, gitPasswordResponse::STATUS_EMAIL_NOT_EXIST);
  }

  public function sendFederated($request, $response) {
    $this->setResponse($request, $response, gitPasswordResponse::STATUS_FEDERATED);
  }

  public function sendOk($request, $response) {
    $this->setResponse($request, $response, gitPasswordResponse::STATUS_OK);
  }

  public function sendPasswordError($request, $response) {
    $this->setResponse($request, $response, gitPasswordResponse::STATUS_PASSWORD_ERROR);
  }

  public function login($request, $response) {
    gitContext::getSessionManager()->setSessionAccount($request->getAccount());
  }
}
