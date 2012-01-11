<?php
/**
 * The federated login callback page. The IDP will redirect the user to this page after
 * authenticating the user.
 */

require_once('autoload.php');

class gitCallbackHandler {
  private $email;
  private $purpose;
  private $url;
  private $idpResponse;

  public function __construct($email, $purpose, $url, $idpResponse) {
    $this->email = $email;
    $this->purpose = $purpose;
    $this->url = $url;
    $this->idpResponse = $idpResponse;
  }

  public function execute() {
    $apiClient = gitContext::getApiClient();
    $assertion = $apiClient->verify($this->url, $this->idpResponse);

    $request = new gitCallbackRequest($this->email, $this->purpose, $assertion);
    $response = new gitCallbackResponse();
    $action = new gitCallbackAction();
    $logic = new gitCallbackLogic($action);
    $logic->run($request, $response);
    $error = $response->getError();
    if (!empty($error)) {
      gitUtil::sendError($error);
    } else {
      header(sprintf('Content-type: %s', $response->getContentType()));
      echo $response->getOutput();
    }
  }
}
