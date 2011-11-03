<?php

class cqSessionStorage extends sfSessionStorage
{
  public function initialize($options = null)
  {
    $session_id = isset($_POST['_session_id']) ? $_POST['_session_id'] : @$_GET['_session_id'];
    if (!empty($session_id))
    {
      session_id($session_id);
    }

    parent::initialize($options);
  }
}
