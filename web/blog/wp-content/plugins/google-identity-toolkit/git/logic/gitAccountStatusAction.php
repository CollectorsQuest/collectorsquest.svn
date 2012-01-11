<?php
/**
 * The action class to handle the get user status query.
 */

class gitAccountStatusAction {

  private function setResponse($request, $response, $registered, $legacy) {
    $response->setRegistered($registered);
    $response->setLegacy($legacy);
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

  public function sendRegisteredFederated($request, $response) {
    $this->setResponse($request, $response, TRUE, FALSE);
  }

  public function sendUnRegisteredFederated($request, $response) {
    $this->setResponse($request, $response, FALSE, FALSE);
  }

  public function sendRegisteredLegacy($request, $response) {
    $this->setResponse($request, $response, TRUE, TRUE);
  }

  public function sendUnRegisteredLegacy($request, $response) {
    $this->setResponse($request, $response, FALSE, TRUE);
  }

  // TODO: Return error message instead of empty response.
  public function sendError($request, $response) {
    $this->setResponse($request, $response, NULL, NULL);
  }
}
