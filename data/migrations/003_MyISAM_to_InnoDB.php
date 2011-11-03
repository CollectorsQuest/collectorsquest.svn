<?php

class Migration003 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL("UPDATE collector SET last_seen_at = '1900-01-01 00:00:00' WHERE last_seen_at = '0000-00-00 00:00:00'");
    $this->executeSQL("ALTER TABLE `collector` CHANGE `last_seen_at` `last_seen_at` DATE NULL;");
    $this->executeSQL("UPDATE `collector` SET last_seen_at = NULL WHERE last_seen_at = '1900-01-01 00:00:00'");

    $this->executeSQL("UPDATE collection_item SET updated_at = NOW() WHERE updated_at = '0000-00-00 00:00:00'");
    $this->executeSQL("UPDATE collection_item SET created_at = updated_at WHERE created_at = '0000-00-00 00:00:00'");

    $this->executeSQL("UPDATE `collector_profile` SET dob = '1900-01-01' WHERE dob = '0000-00-00'");
    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `dob` `dob` DATE NULL;");
    $this->executeSQL("UPDATE `collector_profile` SET dob = NULL WHERE dob = '1900-01-01'");

    $this->executeSQL('ALTER TABLE `collection`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collection_category`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collection_category_field`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collection_item`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collection_item_for_sale`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collection_item_offer`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collector`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collector_buddy`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collector_interview`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collector_message`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `collector_profile`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `comment`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `custom_field`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `custom_value`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `featured`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `featured_type`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `featured_week`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `interview_question`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `playlist`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `resource_category`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `resource_entry`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `tag`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `tagging`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `term`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `term_relationship`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `trivia`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `video`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `video_collection_category`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `video_playlist`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `session_storage`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
    $this->executeSQL('ALTER TABLE `zipcodes`  ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');
  }

  public function down() 
  {
    ;
  }
}
