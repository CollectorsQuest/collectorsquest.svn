<?php
require_once('autoload.php');
class gitCallbackLogicTest extends PHPUnit_Framework_TestCase {

  private $mockAction;
  private $mockAccountService;
  private $mockSessionManager;
  private $logic;
  private $response;

  protected function setUp() {
    $this->mockAction = $this->getMock('gitCallbackAction');
    $this->mockAccountService = $this->getMock('gitAccountService');
    $this->mockSessionManager = $this->getMock('gitSessionManager');
    gitContext::setAccountService($this->mockAccountService);
    gitContext::setSessionManager($this->mockSessionManager);
    $this->logic = new gitCallbackLogic($this->mockAction);
    $this->response = new gitCallbackResponse();
  }

  protected function tearDown() {
    gitContext::setAccountService(NULL);
    gitContext::setSessionManager(NULL);
  }

  public function testInvalidPurpose() {
    $assertion = new gitAssertion('http://google.com/a', 'a@gmail.com');
    $request = new gitCallbackRequest('a@gmail.com', 'invalidPurpose', $assertion);
    $this->logic->run($request, $this->response);
    $error = $this->response->getError();
    $this->assertFalse(empty($error));
  }

  public function testSigninMismatch() {
    $assertion = new gitAssertion('http://google.com/a', 'a@gmail.com');
    $request = new gitCallbackRequest('b@gmail.com', 'signin', $assertion);

    $this->mockAction->expects($this->once())
        ->method('saveAssertion');
    $this->mockAction->expects($this->once())
        ->method('sendErrorMismatch');

    $this->logic->run($request, $this->response);
  }

  public function testSigninMatchNoExist() {
    $email = 'a@gmail.com';
    $assertion = new gitAssertion('http://google.com/a', $email);
    $request = new gitCallbackRequest($email, 'signin', $assertion);

    $this->mockAccountService->expects($this->once())
        ->method('getAccountByEmail')
        ->with($email)
        ->will($this->returnValue(NULL));

    $this->mockAction->expects($this->once())
        ->method('saveAssertion');
    $this->mockAction->expects($this->once())
        ->method('showNewAccountPage');
    $this->logic->run($request, $this->response);
  }

  public function testSigninMatchExistLegacy() {
    $email = 'a@gmail.com';
    $assertion = new gitAssertion('http://google.com/a', $email);
    $request = new gitCallbackRequest($email, 'signin', $assertion);
    $account = new gitAccount('a@gmail.com', gitAccount::LEGACY);

    $this->mockAccountService->expects($this->once())
        ->method('getAccountByEmail')
        ->with($email)
        ->will($this->returnValue($account));

    $this->mockAction->expects($this->once())
        ->method('login');
    $this->mockAction->expects($this->once())
        ->method('upgrade');
    $this->mockAction->expects($this->once())
        ->method('showHomePage');

    $this->logic->run($request, $this->response);
    $this->assertEquals(gitAccount::FEDERATED, $request->getAccount()->getAccountType());
  }

  public function testSigninMatchExistFederated() {
    $email = 'a@gmail.com';
    $assertion = new gitAssertion('http://google.com/a', $email);
    $request = new gitCallbackRequest($email, 'signin', $assertion);
    $account = new gitAccount('a@gmail.com', gitAccount::FEDERATED);

    $this->mockAccountService->expects($this->once())
        ->method('getAccountByEmail')
        ->with($email)
        ->will($this->returnValue($account));

    $this->mockAction->expects($this->once())
        ->method('login');
    $this->mockAction->expects($this->once())
        ->method('showHomePage');

    $this->logic->run($request, $this->response);
    $this->assertEquals(gitAccount::FEDERATED, $request->getAccount()->getAccountType());
  }

  public function testUpgradeNoLoggedIn() {
    $email = 'a@gmail.com';
    $assertion = new gitAssertion('http://google.com/a', $email);
    $request = new gitCallbackRequest($email, 'upgrade', $assertion);

    $this->mockSessionManager->expects($this->once())
        ->method('getSessionAccount')
        ->will($this->returnValue(NULL));
    $this->logic->run($request, $this->response);
    $error = $this->response->getError();
    $this->assertFalse(empty($error));
  }

  public function testUpgradeSessionEmailMismatch() {
    $email = 'a@gmail.com';
    $assertion = new gitAssertion('http://google.com/a', $email);
    $request = new gitCallbackRequest($email, 'upgrade', $assertion);
    $account = new gitAccount('b@gmail.com', gitAccount::LEGACY);

    $this->mockSessionManager->expects($this->once())
        ->method('getSessionAccount')
        ->will($this->returnValue($account));
    $this->mockAction->expects($this->once())
        ->method('sendErrorMismatch');
    $this->logic->run($request, $this->response);
  }

  public function testUpgradeSessionEmailMatch() {
    $email = 'a@gmail.com';
    $assertion = new gitAssertion('http://google.com/a', $email);
    $request = new gitCallbackRequest($email, 'upgrade', $assertion);
    $account = new gitAccount($email, gitAccount::LEGACY);

    $this->mockSessionManager->expects($this->once())
        ->method('getSessionAccount')
        ->will($this->returnValue($account));
    $this->mockAction->expects($this->once())
        ->method('upgrade');
    $this->mockAction->expects($this->once())
        ->method('showHomePage');
    $this->logic->run($request, $this->response);
  }
}
