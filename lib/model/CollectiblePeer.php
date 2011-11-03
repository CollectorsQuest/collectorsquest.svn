<?php

require 'lib/model/om/BaseCollectiblePeer.php';

class CollectiblePeer extends BaseCollectiblePeer
{
  public static function getObjectForRoute($parameters)
  {
    $parameters['id'] = str_replace(array('.html', '.htm'), '', $parameters['id']);

    return self::retrieveByPk($parameters['id']);
  }

  public static function getLatest($limit = 18)
  {
    $c = new Criteria();
    $c->addDescendingOrderByColumn(self::ID);
    $c->setLimit($limit);

    return self::doSelect($c);
  }

  public static function getPopularByTag($tag, $limit = 6)
  {
    $c = new Criteria();
    $c->add(TagPeer::NAME, $tag);
    $c->addJoin(TaggingPeer::TAG_ID, TagPeer::ID);
    $c->add(TaggingPeer::TAGGABLE_MODEL, 'Collectible');
    $c->addJoin(self::ID, TaggingPeer::TAGGABLE_ID, Criteria::LEFT_JOIN);
    $c->setLimit($limit);

    return self::doSelect($c);
  }

  public static function getPopularTags($limit = 50)
  {
    $c = new Criteria();
    $c->add(TagPeer::NAME, 'CHAR_LENGTH('.TagPeer::NAME.') > 2', Criteria::CUSTOM);
    $c->setLimit($limit);

    return TagPeer::getPopulars($c, array('model' => 'Collectible'));
  }
  
  
}
