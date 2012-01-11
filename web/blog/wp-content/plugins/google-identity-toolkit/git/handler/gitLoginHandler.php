<?php
/**
 * The page to handle the user login requests. The identity toolkit widget posts requests to this
 * page.
 */
require_once('autoload.php');

class gitLoginHandler {
  private $target;
  private $email;
  private $password;

  public function __construct($target, $email, $password) {
    $this->target = $target;
    $this->email = $email;
    $this->password = $password;
  }

  public function execute() {
    if (empty($this->target)) {
      gitUtil::sendError('Param rp_target can not be empty.');
    } else {
      $target = strtolower($this->target);
      if ($target == 'userstatus') {
        $this->handleUserStatus();
      } else if ($target == 'login') {
        $this->handleLogin();
      } else {
        gitUtil::sendError(sprintf('Invalid param rp_target: %s', $this->target));
      }
    }
  }

  private function handleLogin() {
    $action = new gitPasswordAction();
    $request = new gitLoginRequest($this->email, $this->password);
    $response = new gitPasswordResponse();
    $logic = new gitPasswordLogic($action);
	
    $logic->run($request, $response);
    $error = $response->getError();
    if (!empty($error)) {
      gitUtil::sendError($error);
    } else {
      header(sprintf('Content-type: %s', $response->getContentType()));
      echo $response->getOutput();
    }
  }

  private function handleUserStatus() {
    $action = new gitAccountStatusAction();
    $request = new gitLoginRequest($this->email, NULL);
    $response = new gitAccountStatusResponse();
    $logic = new gitAccountStatusLogic($action);
    $logic->run($request, $response);
    $error = $response->getError();
    if (!empty($error)) {
      gitUtil::sendError($error);
    } else {
      header(sprintf('Content-type: %s', $response->getContentType()));
      echo $response->getOutput();
	exit;
    }
  }
}
