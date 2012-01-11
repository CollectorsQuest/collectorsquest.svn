<?php

require_once('handler/gitCallbackHandler.php');

$inputEmail = isset($_GET['rp_input_email']) ? $_GET['rp_input_email'] : '';
$purpose = isset($_GET['rp_purpose']) ? $_GET['rp_purpose'] : '';
$url = gitUtil::getCurrentUrl();
$idpResponse = @file_get_contents('php://input');

$handler = new gitCallbackHandler($inputEmail, $purpose, $url, $idpResponse);
$handler->execute();
