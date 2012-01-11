<?php
/**
 * The logic to handle the account status checking request. It collects the input params and the
 * current account status then make decision to call the action class to generate the response.
 */

class gitAccountStatusLogic {
  private $action;
  public function __construct($action) {
    $this->action = $action;
  }

  public function run($request, $response) {
    $email = $request->getEmail();
    if (empty($email)) {
      $this->action->sendError($request, $response);
    }
	$account = gitContext::getAccountService()->getAccountByEmail($email);
	
    if (empty($account)) {
      $canFederate = gitUtil::isFederatedDomain(gitUtil::getEmailDomain($email));
      if ($canFederate) {
        $this->action->sendUnRegisteredFederated($request, $response);
      } else {
        $this->action->sendUnRegisteredLegacy($request, $response);
      }
    } else {
		$email = $account->getEmail();
		$request = new gitLoginRequest($email, NULL);
      	$request->setAccount($account);
		
		$canFederate = gitUtil::isFederatedDomain(gitUtil::getEmailDomain($email));
		 
      if ($account->getAccountType() == gitAccount::FEDERATED || $canFederate) {
        $this->action->sendRegisteredFederated($request, $response);
      } else {
        $this->action->sendRegisteredLegacy($request, $response);
      }
    }
  }
}
