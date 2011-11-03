<?php

class Migration031 extends sfMigration
{
  public function up()
  {
    $this->executeSQL("RENAME TABLE `message_template` TO `private_message_template`");
    $this->executeSQL("TRUNCATE TABLE `private_message_template`");

    $this->executeSQL("
      INSERT INTO `private_message_template` (
        `id`, `subject`, `body`, `description`, `updated_at`, `created_at`
      )
      VALUES (
        NULL, 'Welcome to Collectors'' Quest',  'Welcome to Collectors'' Quest - the destination place for all collectors & sellers.
        Get started by <a href=\"http://www.collectorsquest.com/collection/create.html\">adding your own collection</a> or just click around to find some great <a href=\"http://www.collectorsquest.com/collection.html\">collections</a> and <a href=\"http://www.collectorsquest.com/collectors.html\">collectors</a>.

        What''s in your collection?',
        'The welcome email to be sent to collectors upon signup',
        '2011-05-29 21:42:26',  '2011-05-29 21:42:28'
      );
    ");

    $this->executeSQL("
      INSERT INTO `private_message_template` (
        `id`, `subject`, `body`, `description`, `updated_at`, `created_at`
      )
      VALUES (
        NULL, 'Welcome to Collectors'' Quest',  'Welcome to Collectors'' Quest - the destination place for all collectors & sellers.
        Get started by <a href=\"http://www.collectorsquest.com/collection/create.html\">adding your own collection for sale</a> or just click around to find some great <a href=\"http://www.collectorsquest.com/collection.html\">collections</a> and <a href=\"http://www.collectorsquest.com/collectors.html\">collectors</a>.

        What do you have for sale?',
        'The welcome email to be sent to sellers upon signup',
        '2011-05-29 21:42:26',  '2011-05-29 21:42:28'
      );
    ");
  }

  public function down()
  {
    ;
  }
}
