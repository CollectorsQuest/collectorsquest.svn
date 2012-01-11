<?php
/**
 * The logic to handle the email and password post request.. It collects the input params and the
 * current account status then make decision to call the action class to generate the response.
 */

class gitPasswordLogic {
	private $action;
	public function __construct($action) {
		$this -> action = $action;
	}

	public function run($request, $response) {
		$email = $request -> getEmail();
		$password = $request -> getPassword();

		if (empty($email)) {
			$this -> action -> sendEmailNotExist($request, $response);
		}

		$account = gitContext::getAccountService() -> getAccountByEmail($email);

		if (empty($account)) {
			$this -> action -> sendEmailNotExist($request, $response);
		} else {
			$email = $account -> getEmail();
			$request = new gitLoginRequest($email, $password);
			$request -> setAccount($account);

			if (gitUtil::isValidEmail($email)) {
				if ($account -> getAccountType() == gitAccount::FEDERATED) {
					$this -> action -> sendFederated($request, $response);
				} else {
					if (gitContext::getAccountService() -> checkPassword($email, $password)) {
						$this -> action -> login($request, $response);
						$this -> action -> sendOk($request, $response);
					} else {
						$this -> action -> sendPasswordError($request, $response);
					}
				}
			} else {
				if ($account -> getAccountType() == gitAccount::FEDERATED) {
					$this -> action -> sendPasswordError($request, $response);
				} else {
					if (gitContext::getAccountService() -> checkPassword($email, $password)) {
						$this -> action -> login($request, $response);
						$this -> action -> sendOk($request, $response);
					} else {
						$this -> action -> sendPasswordError($request, $response);
					}
				}
			}
		}
	}

}
