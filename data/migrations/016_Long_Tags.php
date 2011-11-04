<?php

class Migration016 extends sfMigration
{
  public function up()
  {
    $cache = array();

    $c = new Criteria();
    $c->addSelectColumn(iceModelTagPeer::ID);
    $c->addSelectColumn(iceModelTagPeer::NAME);
    $c->addAsColumn('spaces', "CHAR_LENGTH(". iceModelTagPeer::NAME .") - CHAR_LENGTH(REPLACE(". iceModelTagPeer::NAME .", ' ', ''))");
    $c->addDescendingOrderByColumn("spaces");

    $stmt = iceModelTagPeer::doSelectStmt($c);
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      list($tag_id, $tag_name, $spaces) = $row;
      if ($spaces <= 2) continue;

      $c = new Criteria;
      $c->add(iceModelTaggingPeer::TAG_ID, $tag_id);
      $taggings = iceModelTaggingPeer::doSelect($c);

      /** @var $tagging iceModelTagging */
      foreach ($taggings as $tagging)
      {
        $object = call_user_func(array($tagging->getTaggableModel().'Peer', 'retrieveByPk'), $tagging->getTaggableID());
        if (is_object($object))
        {
          if (empty($cache[md5($tag_name)]))
          {
            $cache[md5($tag_name)] = YahooTermExtraction::exract($tag_name);
          }

          if (!empty($cache[md5($tag_name)]))
          {
            // Delete the tagging relationship
            $tagging->delete();

            // Add the new tags
            $object->addTag($cache[md5($tag_name)]);
            $object->save();
          }
        }
      }

      echo $tag_name ."\n";

      // Delete the long tag itself
      $c = new Criteria;
      $c->add(iceModelTagPeer::ID, $tag_id);
      iceModelTagPeer::doDelete($c);
    }
  }

  public function down()
  {
    ;
  }
}
