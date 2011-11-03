<?php

class Migration011 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL("DROP TABLE IF EXISTS `private_message`;");
    $this->executeSQL("
      CREATE TABLE `private_message`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `thread` VARCHAR(32),
        `sender` INTEGER  NOT NULL,
        `receiver` INTEGER  NOT NULL,
        `subject` VARCHAR(255)  NOT NULL,
        `body` TEXT  NOT NULL,
        `is_rich` BOOL default 0,
        `is_read` BOOL default 0,
        `is_replied` BOOL default 0,
        `is_forwarded` BOOL default 0,
        `is_marked` BOOL default 0,
        `is_deleted` BOOL default 0,
        `created_at` DATETIME,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB;
    ");
    $this->executeSQL("
      INSERT INTO private_message
      SELECT null, thread,  sender, receiver, subject, body, 0, IF(new_msg = 1, 0, 1), 0, 0, 0, 0, created_at FROM collector_message;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `message_template`;");
    $this->executeSQL("
      CREATE TABLE `message_template`
      (
        `id` INTEGER NOT NULL AUTO_INCREMENT,
        `subject` VARCHAR(255) NOT NULL,
        `body` TEXT NOT NULL,
        `description` VARCHAR(255),
        `updated_at` DATETIME,
        `created_at` DATETIME,
        PRIMARY KEY (`id`)
      ) Engine=InnoDB;
    ");

    $private_messages = PrivateMessagePeer::doSelect(new Criteria());
    foreach ($private_messages as $private_message)
    {
      $c = new Criteria();
      $c->add(PrivateMessagePeer::THREAD, $private_message->getThread());
      $c->add(PrivateMessagePeer::CREATED_AT, $private_message->getCreatedAt(), Criteria::GREATER_THAN);

      $body = $private_message->getBody();

      $private_message->setIsRich($private_message->getSender() == 1);
      $private_message->setBody($body, $private_message->getSender() != 1);
      $private_message->setIsReplied(PrivateMessagePeer::doCount($c) > 0);
      $private_message->save();
    }

    $this->executeSQL("DROP TABLE IF EXISTS `collector_message`;");
  }

  public function down() 
  {
    $this->executeSQL("DROP TABLE IF EXISTS `private_message`;");
    $this->executeSQL("DROP TABLE IF EXISTS `message_template`;");
  }
}
