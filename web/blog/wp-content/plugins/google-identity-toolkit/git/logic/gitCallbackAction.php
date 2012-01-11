<?php
/**
 * The action class to generate the responses.
 */

class gitCallbackAction {
  public function saveAssertion($request, $response) {
    gitContext::getSessionManager()->setAssertion($request->getAssertion());
  }

  private function setSuccess($response, $account, $result) {
    $HTML = '<html><head>'
        . '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>'
        . '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>'
        . '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/googleapis/0.0.4/googleapis.min.js"></script>'
        . '<script type=text/javascript src="https://ajax.googleapis.com/jsapi"></script>'
        . '<script type="text/javascript">'
        .   'google.load("identitytoolkit", "1.0", {packages: ["ac", "notify"]});'
        . '</script>'
        . '<script type="text/javascript">'
        .   'google.identitytoolkit.updateSavedAccount(%s);'
        .   'google.identitytoolkit.notifyFederatedSuccess(%s);'
        . '</script>'
        . '</head><body></body></html>';
    $jsonAccount = json_encode($account);
    $jsonResult = json_encode($result);
    $output = sprintf($HTML, $jsonAccount, $jsonResult);
    $response->setOutput($output);
  }

  private function setError($response, $code, $param) {
    $HTML = '<html><head>'
        . '<script type=text/javascript src="https://ajax.googleapis.com/jsapi"></script>'
        . '<script type="text/javascript">'
        .   'google.load("identitytoolkit", "1.0", {packages: ["notify"]});'
        . '</script>'
        . '<script type="text/javascript">'
        .   'google.identitytoolkit.notifyFederatedError("%s", %s);'
        . '</script>'
        . '</head><body></body></html>';

    $json = json_encode($param);
    $output = sprintf($HTML, $code, $json);
    $response->setOutput($output);
  }

  public function sendErrorMismatch($request, $response) {
    $result = array();
    $result['validatedEmail'] = $request->getAssertion()->getVerifiedEmail();
    $result['inputEmail'] = $request->getInputEmail();
    $result['purpose'] = $request->getPurpose();
    $this->setError($response, 'accountMismatch', $result);
  }

  public function sendErrorNoVerifiedEmail($request, $response) {
    $this->setError($response, 'invalidAssertionEmail', NULL);
  }

  public function sendErrorServer($request, $response) {
    $this->setError($response, 'invalidAssertion', NULL);
  }

  public function sendErrorUserCancel($request, $response) {
    // The widget should only close the popup window without error message.
    $this->setError($response, 'invalidAssertion', NULL);
  }

  public function showHomePage($request, $response) {
    $result = array();
    $result['email'] = $request->getAccount()->getEmail();
    $result['registered'] = TRUE;

    $account = array();
    $account['email'] = $request->getAccount()->getEmail();
    $account['displayName'] = $request->getAccount()->getDisplayName();
    $account['photoUrl'] = $request->getAccount()->getPhotoUrl();

    $this->setSuccess($response, $account, $result);
  }

  public function showNewAccountPage($request, $response) {
    $assertion = $request->getAssertion();
    $result = array();

    $result['email'] = $assertion->getVerifiedEmail();
    $result['registered'] = FALSE;

    $account = array();
    $account['email'] = $assertion->getVerifiedEmail();
    $account['displayName'] = $assertion->getDisplayName();
    $account['photoUrl'] = $assertion->getPhotoUrl();

    $this->setSuccess($response, $account, $result);
  }

  public function upgrade($request, $response) {
    $verifiedEmail = $request->getAssertion()->getVerifiedEmail();
    gitContext::getAccountService()->toFederated($verifiedEmail);
    // Update the account info in the session.
    $account = gitContext::getAccountService()->getAccountByEmail($verifiedEmail);
    if (!empty($account)) {
      gitContext::getSessionManager()->setSessionAccount($account);
    }
  }

  public function login($request, $response) {
    gitContext::getSessionManager()->setSessionAccount($request->getAccount());
  }
}
