<?php

class VideoPeer extends BaseVideoPeer
{
  public static function getFeaturedVideos($limit = 2)
  {
    $c = new Criteria();
    $c->addAscendingOrderByColumn('RAND()');
    $c->add(VideoPeer::IS_PUBLISHED, true);
    $c->setLimit($limit);
    $videos = VideoPeer::doSelect($c);

    return $videos;
  }

  public static function retrieveByTags($tags, $limit = 10)
  {
    $c = new Criteria();
    $c->setDistinct();
    $c->add(VideoPeer::IS_PUBLISHED, true);
    $c->addJoin(VideoPeer::ID, TaggingPeer::TAGGABLE_ID);
    $c->addJoin(TaggingPeer::TAG_ID, TagPeer::ID);
    if (is_array($tags)) {
      $c->add(TagPeer::NAME, $tags, Criteria::IN);
    } else {
      $c->add(TagPeer::NAME, $tags);
    }
    $c->add(TaggingPeer::TAGGABLE_MODEL, 'Video');
    $c->addAscendingOrderByColumn('RAND()');
    $c->setLimit($limit);

    return VideoPeer::doSelect($c);
  }

  public static function getRandomVideos($limit = 5)
  {
    $c = new Criteria();

    $c->setDistinct();
    $c->add(VideoPeer::IS_PUBLISHED, true);
    $c->addAscendingOrderByColumn('RAND()');
    $c->setLimit($limit);

    return VideoPeer::doSelect($c);
  }
}
