
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- collector
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collector`;


CREATE TABLE `collector`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`facebook_id` INTEGER,
	`username` VARCHAR(64)  NOT NULL,
	`display_name` VARCHAR(64)  NOT NULL,
	`slug` VARCHAR(64),
	`sha1_password` VARCHAR(40)  NOT NULL,
	`salt` VARCHAR(32)  NOT NULL,
	`score` INTEGER default 0,
	`email` VARCHAR(128)  NOT NULL,
	`user_type` ENUM('Collector','Seller') default 'Collector',
	`items_allowed` INTEGER,
	`what_you_collect` VARCHAR(255),
	`purchases_per_year` INTEGER default 0,
	`what_you_sell` VARCHAR(255),
	`annually_spend` FLOAT default 0,
	`most_expensive_item` FLOAT default 0,
	`company` VARCHAR(255),
	`is_public` TINYINT default 1,
	`session_id` VARCHAR(255),
	`last_seen_at` DATETIME,
	`deleted_at` DATETIME,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `collector_FI_1` (`session_id`),
	CONSTRAINT `collector_FK_1`
		FOREIGN KEY (`session_id`)
		REFERENCES `session_storage` (`id`)
		ON DELETE SET NULL
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collector_profile
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collector_profile`;


CREATE TABLE `collector_profile`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER  NOT NULL,
	`collector_type` VARCHAR(64),
	`birthday` DATE,
	`gender` ENUM('f','m'),
	`zip_postal` VARCHAR(10),
	`country` VARCHAR(64),
	`country_iso3166` VARCHAR(2),
	`website` VARCHAR(128),
	`about` TEXT,
	`collections` TEXT,
	`collecting` VARCHAR(255),
	`most_spent` INTEGER,
	`anually_spent` INTEGER,
	`new_item_every` VARCHAR(64),
	`interests` TEXT,
	`is_featured` TINYINT default 0,
	`is_seller` TINYINT default 0,
	`is_image_auto` TINYINT default 1 NOT NULL,
	`preferences` TEXT,
	`notifications` TEXT,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `collector_profile_U_1` (`collector_id`),
	CONSTRAINT `collector_profile_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collector_identifier
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collector_identifier`;


CREATE TABLE `collector_identifier`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER,
	`identifier` VARCHAR(255),
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `collector_identifier_U_1` (`collector_id`, `identifier`),
	CONSTRAINT `collector_identifier_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collector_interview
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collector_interview`;


CREATE TABLE `collector_interview`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER  NOT NULL,
	`collection_category_id` INTEGER,
	`collection_id` INTEGER,
	`title` VARCHAR(128)  NOT NULL,
	`catch_phrase` VARCHAR(128)  NOT NULL,
	`is_active` TINYINT default 0,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `collector_interview_FI_1` (`collector_id`),
	CONSTRAINT `collector_interview_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE,
	INDEX `collector_interview_FI_2` (`collection_category_id`),
	CONSTRAINT `collector_interview_FK_2`
		FOREIGN KEY (`collection_category_id`)
		REFERENCES `collection_category` (`id`)
		ON DELETE SET NULL,
	INDEX `collector_interview_FI_3` (`collection_id`),
	CONSTRAINT `collector_interview_FK_3`
		FOREIGN KEY (`collection_id`)
		REFERENCES `collection` (`id`)
		ON DELETE SET NULL
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collector_geocache
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collector_geocache`;


CREATE TABLE `collector_geocache`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER  NOT NULL,
	`country` CHAR(64),
	`country_iso3166` CHAR(2),
	`state` VARCHAR(64),
	`county` VARCHAR(64),
	`city` VARCHAR(64),
	`zip_postal` CHAR(10),
	`address` VARCHAR(128),
	`latitude` DECIMAL(7,5),
	`longitude` DECIMAL(7,5),
	`timezone` VARCHAR(128),
	PRIMARY KEY (`id`),
	INDEX `collector_geocache_FI_1` (`collector_id`),
	CONSTRAINT `collector_geocache_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collector_friend
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collector_friend`;


CREATE TABLE `collector_friend`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER,
	`friend_id` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `collector_friend_FI_1` (`collector_id`),
	CONSTRAINT `collector_friend_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`),
	INDEX `collector_friend_FI_2` (`friend_id`),
	CONSTRAINT `collector_friend_FK_2`
		FOREIGN KEY (`friend_id`)
		REFERENCES `collector` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- interview_question
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `interview_question`;


CREATE TABLE `interview_question`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_interview_id` INTEGER  NOT NULL,
	`question` VARCHAR(128)  NOT NULL,
	`answer` TEXT  NOT NULL,
	`photo` VARCHAR(128),
	PRIMARY KEY (`id`),
	INDEX `interview_question_FI_1` (`collector_interview_id`),
	CONSTRAINT `interview_question_FK_1`
		FOREIGN KEY (`collector_interview_id`)
		REFERENCES `collector_interview` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collection
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collection`;


CREATE TABLE `collection`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collection_category_id` INTEGER,
	`collector_id` INTEGER  NOT NULL,
	`name` VARCHAR(128)  NOT NULL,
	`slug` VARCHAR(140)  NOT NULL,
	`description` TEXT  NOT NULL,
	`num_items` INTEGER,
	`num_views` INTEGER,
	`num_comments` INTEGER,
	`num_ratings` INTEGER,
	`score` INTEGER default 0,
	`is_public` TINYINT default 1,
	`is_featured` TINYINT default 0,
	`comments_on` TINYINT default 1,
	`rating_on` TINYINT default 1,
	`deleted_at` DATETIME,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `collection_FI_1` (`collection_category_id`),
	CONSTRAINT `collection_FK_1`
		FOREIGN KEY (`collection_category_id`)
		REFERENCES `collection_category` (`id`)
		ON DELETE SET NULL,
	INDEX `collection_FI_2` (`collector_id`),
	CONSTRAINT `collection_FK_2`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collection_category
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collection_category`;


CREATE TABLE `collection_category`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`parent_id` INTEGER default 0,
	`name` VARCHAR(64)  NOT NULL,
	`score` INTEGER default 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collection_category_field
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collection_category_field`;


CREATE TABLE `collection_category_field`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collection_category_id` INTEGER,
	`custom_field_id` INTEGER,
	PRIMARY KEY (`id`),
	UNIQUE KEY `collection_category_field` (`collection_category_id`, `custom_field_id`),
	CONSTRAINT `collection_category_field_FK_1`
		FOREIGN KEY (`collection_category_id`)
		REFERENCES `collection_category` (`id`),
	INDEX `collection_category_field_FI_2` (`custom_field_id`),
	CONSTRAINT `collection_category_field_FK_2`
		FOREIGN KEY (`custom_field_id`)
		REFERENCES `custom_field` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collectible
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collectible`;


CREATE TABLE `collectible`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER  NOT NULL,
	`collection_id` INTEGER  NOT NULL,
	`name` VARCHAR(64)  NOT NULL,
	`slug` VARCHAR(128),
	`description` TEXT  NOT NULL,
	`num_comments` INTEGER default 0,
	`score` INTEGER default 0,
	`position` TINYINT,
	`is_name_automatic` BOOL default 0,
	`deleted_at` DATETIME,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `collectible_FI_1` (`collector_id`),
	CONSTRAINT `collectible_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE,
	INDEX `collectible_FI_2` (`collection_id`),
	CONSTRAINT `collectible_FK_2`
		FOREIGN KEY (`collection_id`)
		REFERENCES `collection` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collectible_for_sale
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collectible_for_sale`;


CREATE TABLE `collectible_for_sale`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collectible_id` INTEGER  NOT NULL,
	`price` FLOAT,
	`condition` ENUM('excellent','very good','good','fair','poor')  NOT NULL,
	`is_price_negotiable` TINYINT default 0,
	`is_shipping_free` TINYINT default 0,
	`is_sold` TINYINT default 0,
	`is_ready` TINYINT default 0  COMMENT 'Show in the market or no',
	`quantity` INTEGER default 1 NOT NULL,
	`deleted_at` DATETIME,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `collectible_for_sale_item` (`collectible_id`),
	CONSTRAINT `collectible_for_sale_FK_1`
		FOREIGN KEY (`collectible_id`)
		REFERENCES `collectible` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- collectible_offer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `collectible_offer`;


CREATE TABLE `collectible_offer`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collectible_id` INTEGER  NOT NULL,
	`collectible_for_sale_id` INTEGER  NOT NULL,
	`collector_id` INTEGER,
	`price` FLOAT,
	`status` ENUM('pending','counter','rejected','accepted')  NOT NULL,
	`deleted_at` DATETIME,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `collectible_offer_FI_1` (`collectible_id`),
	CONSTRAINT `collectible_offer_FK_1`
		FOREIGN KEY (`collectible_id`)
		REFERENCES `collectible` (`id`)
		ON DELETE CASCADE,
	INDEX `collectible_offer_FI_2` (`collectible_for_sale_id`),
	CONSTRAINT `collectible_offer_FK_2`
		FOREIGN KEY (`collectible_for_sale_id`)
		REFERENCES `collectible_for_sale` (`id`)
		ON DELETE CASCADE,
	INDEX `collectible_offer_FI_3` (`collector_id`),
	CONSTRAINT `collectible_offer_FK_3`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- multimedia
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `multimedia`;


CREATE TABLE `multimedia`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`model` CHAR(64)  NOT NULL,
	`model_id` INTEGER,
	`type` ENUM('image','video') default 'image' NOT NULL,
	`name` VARCHAR(128)  NOT NULL,
	`md5` CHAR(32)  NOT NULL,
	`colors` VARCHAR(128),
	`orientation` ENUM('landscape','portrait') default 'landscape',
	`source` VARCHAR(255),
	`is_primary` BOOL default 0,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `multimedia_U_1` (`model`, `model_id`, `md5`),
	KEY `multimedia_I_1`(`model`, `model_id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- private_message
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `private_message`;


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

#-----------------------------------------------------------------------------
#-- private_message_template
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `private_message_template`;


CREATE TABLE `private_message_template`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`subject` VARCHAR(255)  NOT NULL,
	`body` TEXT  NOT NULL,
	`description` VARCHAR(255),
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- comment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;


CREATE TABLE `comment`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`disqus_id` CHAR(10),
	`parent_id` CHAR(10),
	`collection_id` INTEGER  NOT NULL,
	`collectible_id` INTEGER,
	`collector_id` INTEGER,
	`author_name` VARCHAR(128),
	`author_email` VARCHAR(128),
	`author_url` VARCHAR(255),
	`subject` VARCHAR(128),
	`body` TEXT  NOT NULL,
	`ip_address` VARCHAR(15),
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `comment_U_1` (`disqus_id`),
	INDEX `comment_FI_1` (`collection_id`),
	CONSTRAINT `comment_FK_1`
		FOREIGN KEY (`collection_id`)
		REFERENCES `collection` (`id`)
		ON DELETE CASCADE,
	INDEX `comment_FI_2` (`collectible_id`),
	CONSTRAINT `comment_FK_2`
		FOREIGN KEY (`collectible_id`)
		REFERENCES `collectible` (`id`)
		ON DELETE SET NULL,
	INDEX `comment_FI_3` (`collector_id`),
	CONSTRAINT `comment_FK_3`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- custom_field
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `custom_field`;


CREATE TABLE `custom_field`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	`type` TINYINT  NOT NULL,
	`object` TEXT,
	`validation` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- custom_value
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `custom_value`;


CREATE TABLE `custom_value`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collection_id` INTEGER  NOT NULL,
	`collectible_id` INTEGER  NOT NULL,
	`field_id` INTEGER  NOT NULL,
	`value_text` VARCHAR(255),
	`value_date` DATE,
	`value_numeric` FLOAT,
	`value_bool` TINYINT default 0,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `custom_value_FI_1` (`collection_id`),
	CONSTRAINT `custom_value_FK_1`
		FOREIGN KEY (`collection_id`)
		REFERENCES `collection` (`id`)
		ON DELETE CASCADE,
	INDEX `custom_value_FI_2` (`collectible_id`),
	CONSTRAINT `custom_value_FK_2`
		FOREIGN KEY (`collectible_id`)
		REFERENCES `collectible` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- event
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `event`;


CREATE TABLE `event`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(128)  NOT NULL,
	`description` TEXT  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- event_video
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `event_video`;


CREATE TABLE `event_video`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`event_id` INTEGER,
	`title` VARCHAR(128)  NOT NULL,
	`description` TEXT  NOT NULL,
	`lenght` INTEGER,
	`thumb_small` VARCHAR(255),
	`thumb_large` VARCHAR(255),
	`filename` VARCHAR(255),
	`views` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `event_video_FI_1` (`event_id`),
	CONSTRAINT `event_video_FK_1`
		FOREIGN KEY (`event_id`)
		REFERENCES `event` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- video
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `video`;


CREATE TABLE `video`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(64)  NOT NULL,
	`slug` VARCHAR(64)  NOT NULL,
	`description` TEXT  NOT NULL,
	`type` VARCHAR(64)  NOT NULL,
	`length` INTEGER,
	`filename` VARCHAR(128),
	`thumb_small` VARCHAR(128),
	`thumb_large` VARCHAR(128),
	`is_published` TINYINT,
	`published_at` DATETIME,
	`uploaded_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- video_playlist
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `video_playlist`;


CREATE TABLE `video_playlist`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`video_id` INTEGER,
	`playlist_id` INTEGER,
	`position` TINYINT,
	PRIMARY KEY (`id`),
	INDEX `video_playlist_FI_1` (`video_id`),
	CONSTRAINT `video_playlist_FK_1`
		FOREIGN KEY (`video_id`)
		REFERENCES `video` (`id`),
	INDEX `video_playlist_FI_2` (`playlist_id`),
	CONSTRAINT `video_playlist_FK_2`
		FOREIGN KEY (`playlist_id`)
		REFERENCES `playlist` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- video_collection_category
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `video_collection_category`;


CREATE TABLE `video_collection_category`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`video_id` INTEGER,
	`collection_category_id` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `video_collection_category_FI_1` (`video_id`),
	CONSTRAINT `video_collection_category_FK_1`
		FOREIGN KEY (`video_id`)
		REFERENCES `video` (`id`),
	INDEX `video_collection_category_FI_2` (`collection_category_id`),
	CONSTRAINT `video_collection_category_FK_2`
		FOREIGN KEY (`collection_category_id`)
		REFERENCES `collection_category` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- playlist
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `playlist`;


CREATE TABLE `playlist`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(64)  NOT NULL,
	`slug` VARCHAR(64)  NOT NULL,
	`description` TEXT  NOT NULL,
	`type` VARCHAR(64)  NOT NULL,
	`length` INTEGER,
	`is_published` TINYINT,
	`published_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- trivia
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `trivia`;


CREATE TABLE `trivia`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`content` TEXT  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- resource_category
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `resource_category`;


CREATE TABLE `resource_category`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(128)  NOT NULL,
	`slug` VARCHAR(128),
	`thumbnail` VARCHAR(64),
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- resource_entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `resource_entry`;


CREATE TABLE `resource_entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`category_id` INTEGER  NOT NULL,
	`type` VARCHAR(24) default 'Blog' NOT NULL,
	`name` VARCHAR(128)  NOT NULL,
	`slug` VARCHAR(128),
	`description` TEXT  NOT NULL,
	`url` VARCHAR(255)  NOT NULL,
	`rss` VARCHAR(255)  NOT NULL,
	`thumbnail` VARCHAR(64),
	`blogger` VARCHAR(128),
	`email` VARCHAR(128),
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `resource_entry_FI_1` (`category_id`),
	CONSTRAINT `resource_entry_FK_1`
		FOREIGN KEY (`category_id`)
		REFERENCES `resource_category` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- term
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `term`;


CREATE TABLE `term`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(100),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- term_relationship
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `term_relationship`;


CREATE TABLE `term_relationship`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`term_id` INTEGER,
	`model` VARCHAR(30),
	`model_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `term_relationship_FI_1` (`term_id`),
	CONSTRAINT `term_relationship_FK_1`
		FOREIGN KEY (`term_id`)
		REFERENCES `term` (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- score
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `score`;


CREATE TABLE `score`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`day` DATE,
	`model` CHAR(64)  NOT NULL,
	`model_id` INTEGER,
	`views` INTEGER default 0,
	`ratings` INTEGER default 0,
	`score` INTEGER default 0,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `score_U_1` (`day`, `model`, `model_id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- featured
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `featured`;


CREATE TABLE `featured`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`featured_type_id` TINYINT  NOT NULL,
	`featured_model` VARCHAR(64)  NOT NULL,
	`featured_id` INTEGER,
	`tree_left` INTEGER default 0 NOT NULL,
	`tree_right` INTEGER default 0 NOT NULL,
	`tree_scope` INTEGER default 0 NOT NULL,
	`eblob` TEXT,
	`start_date` DATE,
	`end_date` DATE,
	`is_active` TINYINT default 1 NOT NULL,
	`position` TINYINT default 1,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- package
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `package`;


CREATE TABLE `package`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`package_name` VARCHAR(255)  NOT NULL,
	`package_description` TEXT,
	`max_items_for_sale` INTEGER,
	`package_price` FLOAT,
	`plan_type` ENUM('Casual','Power')  NOT NULL,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- package_transaction
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `package_transaction`;


CREATE TABLE `package_transaction`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`collector_id` INTEGER  NOT NULL,
	`package_id` INTEGER  NOT NULL,
	`max_items_for_sale` INTEGER,
	`package_price` FLOAT,
	`expiry_date` DATETIME,
	`payment_status` VARCHAR(255) default 'pending',
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `package_transaction_FI_1` (`collector_id`),
	CONSTRAINT `package_transaction_FK_1`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE,
	INDEX `package_transaction_FI_2` (`package_id`),
	CONSTRAINT `package_transaction_FK_2`
		FOREIGN KEY (`package_id`)
		REFERENCES `package` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- promotion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `promotion`;


CREATE TABLE `promotion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`promotion_name` VARCHAR(255)  NOT NULL,
	`promotion_desc` TEXT,
	`promotion_code` VARCHAR(255)  NOT NULL,
	`amount` FLOAT,
	`amount_type` ENUM('Fix','Percentage') default 'Fix' NOT NULL,
	`no_of_time_used` INTEGER,
	`expiry_date` DATETIME,
	`updated_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `promotion_U_I` (`promotion_code`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- promotion_transaction
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `promotion_transaction`;


CREATE TABLE `promotion_transaction`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`promotion_id` INTEGER  NOT NULL,
	`collector_id` INTEGER  NOT NULL,
	`amount` FLOAT,
	`amount_type` VARCHAR(255) default 'pending',
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `promotion_transaction_FI_1` (`promotion_id`),
	CONSTRAINT `promotion_transaction_FK_1`
		FOREIGN KEY (`promotion_id`)
		REFERENCES `promotion` (`id`)
		ON DELETE CASCADE,
	INDEX `promotion_transaction_FI_2` (`collector_id`),
	CONSTRAINT `promotion_transaction_FK_2`
		FOREIGN KEY (`collector_id`)
		REFERENCES `collector` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- newsletter_signup
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `newsletter_signup`;


CREATE TABLE `newsletter_signup`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255)  NOT NULL,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
