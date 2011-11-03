<?php

class messagesComponents extends sfComponents
{
  public function executeSidebar()
  {
    $this->buttons = array(
      0 => array(
        'text' => sprintf(
          'Inbox <small>(%d/%d)</small>',
          $this->getUser()->getUnreadMessagesCount(),
          $this->getUser()->getMessagesCount()
        ),
        'icon' => 'mail-closed',
        'route' => '@messages_inbox'
      ),
      1 => array(
        'text' => 'Compose Message',
        'icon' => 'plus',
        'route' => '@message_compose'
      ),
      2 => array(
        'text' => 'Sent Messages',
        'icon' => 'arrowreturnthick-1-e',
        'route' => '@messages_sent'
      )
    );

    return sfView::SUCCESS;
  }
}
