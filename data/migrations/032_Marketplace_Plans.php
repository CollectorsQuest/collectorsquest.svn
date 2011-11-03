<?php

class Migration032 extends sfMigration
{
  public function up()
  {
    $promotion = new Promotion();
    $promotion->setPromotionCode('CQ2011-DHX11');
    $promotion->setPromotionName('Free subscription!');
    $promotion->setPromotionDesc('The promotion is given to the sellers who help us with the initial testing of the Marketplace piece.');
    $promotion->setAmount(250);
    $promotion->setAmountType('Fix');
    $promotion->setNoOfTimeUsed(1000);
    $promotion->setExpiryDate(strtotime('+30 days'));
    $promotion->save();

    $package = new Package();
    $package->setPackagePrice(2.50);
    $package->setMaxItemsForSale(1);
    $package->setPlanType('Casual');
    $package->setPackageName('1 item only');
    $package->setPackageDescription('1 item only');
    $package->save();

    $package = new Package();
    $package->setPackagePrice(11.25);
    $package->setMaxItemsForSale(5);
    $package->setPlanType('Casual');
    $package->setPackageName('Up to 5 items ($2.25 ea)');
    $package->setPackageDescription('Up to 5 items ($2.25 ea)');
    $package->save();

    $package = new Package();
    $package->setPackagePrice(30.00);
    $package->setMaxItemsForSale(15);
    $package->setPlanType('Casual');
    $package->setPackageName('Up to 15 items ($2.00 ea)');
    $package->setPackageDescription('Up to 15 items ($2.00 ea)');
    $package->save();

    $package = new Package();
    $package->setPackagePrice(41.50);
    $package->setMaxItemsForSale(25);
    $package->setPlanType('Casual');
    $package->setPackageName('Up to 25 items ($1.65 ea)');
    $package->setPackageDescription('Up to 25 items ($1.65 ea)');
    $package->save();

    $package = new Package();
    $package->setPackagePrice(150);
    $package->setMaxItemsForSale(1000);
    $package->setPlanType('Power');
    $package->setPackageName('Up to 1000 items ($.15 ea)');
    $package->setPackageDescription('Up to 1000 items ($.15 ea)');
    $package->save();

    $package = new Package();
    $package->setPackagePrice(250);
    $package->setMaxItemsForSale(9999);
    $package->setPlanType('Power');
    $package->setPackageName('Unlimited');
    $package->setPackageDescription('Unlimited items for sale');
    $package->save();

    $this->executeSQL("
      INSERT INTO `package` (`id`, `created_at`, `updated_at`, `package_name`, `package_description`, `max_items_for_sale`, `package_price`, `plan_type`) VALUES
      (9999, NOW(), NOW(), 'Free subscription!', 'Free as in \"Beer\"!', 9999, 250, 'Power');
    ");
  }

  public function down()
  {
    $this->executeSQL('TRUNCATE TABLE promotion_transaction;');
    $this->executeSQL('TRUNCATE TABLE promotion;');
    $this->executeSQL('TRUNCATE TABLE package_transaction;');
    $this->executeSQL('TRUNCATE TABLE package;');
  }
}
