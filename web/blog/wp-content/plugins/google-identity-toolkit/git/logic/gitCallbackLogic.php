<?php
/**
 * The callback logic to handle the various cases.
 */

class gitCallbackLogic {
  private $action;

  public function __construct($action) {
    $this->action = $action;
  }

  public function run($request, $response) {
    $assertion = $request->getAssertion();
    if (empty($assertion)) {
      // There is error to communicate with the API server or the IDP server.
      $this->action->sendErrorServer($request, $response);
      return;
    } else if ($assertion->getIdentifier() == '') {
      // The user denies the account info request on the IDP page.
      $this->action->sendErrorUserCancel($request, $response);
      return;
    } else if ($assertion->getVerifiedEmail() == '') {
      // The user is using the non email provider IDP. e.g. Google account with Yahoo email.
      $this->action->sendErrorNoVerifiedEmail($request, $response);
      return;
    }

    $purpose = $request->getPurpose();
    if (!empty($purpose) && $purpose != 'signin' && $purpose != 'upgrade') {
      $response->setError('Invalid param rp_purpose.');
      return;
    }

    $inputEmail = $request->getInputEmail();
    $verifiedEmail = $assertion->getVerifiedEmail();
    if (empty($purpose) || $purpose == 'signin') {
      // Check whether the user input email matches the email in the IDP assertion.
      if (!empty($inputEmail) && ($inputEmail != $verifiedEmail)) {
        $this->action->saveAssertion($request, $response);
        $this->action->sendErrorMismatch($request, $response);
      } else {
        // Check whether the email already exists.
        $account = gitContext::getAccountService()->getAccountByEmail($verifiedEmail);
        $this->mergeAccountInfo($account, $assertion);
        $request->setAccount($account);
        if (empty($account)) {
          $this->action->saveAssertion($request, $response);
          $this->action->showNewAccountPage($request, $response);
        } else {
          if ($account->getAccountType() != gitAccount::FEDERATED) {
            $this->action->upgrade($request, $response);
            $account->setAccountType(gitAccount::FEDERATED);
            $request->setAccount($account);
          }
          $this->action->login($request, $response);
          $this->action->showHomePage($request, $response);
        }
      }
    } else if ($purpose == 'upgrade') {
      $account = gitContext::getSessionManager()->getSessionAccount($verifiedEmail);
      if (empty($account)) {
        $response->setError(sprintf('The email: %s has not logged in.', $verifiedEmail));
      } else if ($account->getEmail() != $verifiedEmail) {
        $this->action->sendErrorMismatch($request, $response);
      } else {
        $this->action->upgrade($request, $response);
        $this->action->showHomePage($request, $response);
      }
    }
  }

  /**
   * Merges the account properties in the assertion to the account. So that if the RP doesn't store
   * the profile picture the widget can display the picture on the IDP.
   * @param  $account the properties are merged to it
   * @param  $assertion the verified assertion
   * @return void
   */
  private function mergeAccountInfo($account, $assertion) {
    if (!$account || !$assertion) {
      return;
    }
    if ($account->getDisplayName() == "") {
      $account->setDisplayName($assertion->getDisplayName());
    }
    if ($assertion->getPhotoUrl() != "" && $account->getPhotoUrl() == "") {
      $account->setPhotoUrl($assertion->getPhotoUrl());
    }
  }
}
