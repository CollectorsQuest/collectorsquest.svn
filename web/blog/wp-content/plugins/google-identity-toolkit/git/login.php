<?php

require_once('handler/gitLoginHandler.php');

$target = isset($_POST['rp_target']) ? $_POST['rp_target'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$handler = new gitLoginHandler($target, $email, $password);
$handler->execute();
