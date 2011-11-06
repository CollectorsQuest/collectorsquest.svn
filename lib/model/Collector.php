<?php

class Collector extends BaseCollector
{
  protected $profile = null;

  public function isOwnerOf($something)
  {
    if (is_object($something) && method_exists($something, 'getCollectorId'))
    {
      return $something->getCollectorId() == $this->getId();
    }
    else if ($something instanceof PrivateMessage)
    {
      return $something->getSender() == $this->getId();
    }

    return false;
  }

  public function getLastSeenAt($format = 'Y-m-d H:i:s')
  {
    $time = parent::getLastSeenAt($format);

    return ($time == "1999-11-30 00:00:00") ? null : $time;
  }

  public function setPassword($password)
  {
    if (!$salt = $this->getSalt())
    {
      $salt = md5(rand(100000, 999999) .'_'. $this->getUsername());
      $this->setSalt($salt);
    }

    $this->setSha1Password(sha1($salt . $password));
  }

  public function getAutoLoginHash($version = 'v1', $time = null)
  {
    $time = is_numeric($time) ? $time : time();

    switch ($version)
    {
      case 'v1':
      default:
        // Making sure the version is good value
        $version = 'v1';

        $json = json_encode(array(
          'version' => $version, 'id' => $this->getId(),
          'created' => (int) $this->getCreatedAt('U'), 'time' => (int) $time
          ));

        $hash = sprintf(
          "%s;%d;%s;%d", $version, $this->getId(), hash_hmac('sha1', base64_encode($json), $this->getSalt()), $time
        );
        break;
    }

    return $hash;
  }

  /**
   * @return CollectorProfile
   */
  public function getProfile()
  {
    if (!is_null($this->profile))
    {
      return $this->profile;
    }

    $c = new Criteria();
    $c->add(CollectorProfilePeer::COLLECTOR_ID, $this->getId());
    $this->profile = CollectorProfilePeer::doSelectOne($c);

    return $this->profile;
  }

  /**
   * Determines whether the collector as a prifile photo
   *
   * @return boolean
   */
  public function hasPhoto()
  {
    return MultimediaPeer::has($this, 'image', true);
  }

  /**
   * Returns the multimedia object for the collector profile photo
   *
   * @return Multimedia
   */
  public function getPhoto()
  {
    return MultimediaPeer::get($this, 'image', true);
  }

  public function setPhoto($file)
  {
    $c = new Criteria();
    $c->add(MultimediaPeer::MODEL, 'Collector');
    $c->add(MultimediaPeer::MODEL_ID, $this->getId());
    $c->add(MultimediaPeer::TYPE, 'image');
    $c->add(MultimediaPeer::IS_PRIMARY, true);

    // OK to delete any past primary multimedia
    MultimediaPeer::doDelete($c);

    if ($multimedia = MultimediaPeer::createMultimediaFromFile($this, $file))
    {
      $multimedia->setIsPrimary(true);
      $multimedia->makeThumb('100x100', 'shave');
      $multimedia->makeThumb('235x315', 'shave');
      $multimedia->save();

      return true;
    }

    return false;
  }

  public function getMessagesCount()
  {
    $c = new Criteria();
    $c->add(PrivateMessagePeer::RECEIVER, $this->getId());
    $c->add(PrivateMessagePeer::IS_DELETED, false);
    $c->addGroupByColumn(PrivateMessagePeer::THREAD);
    $c->addDescendingOrderByColumn(PrivateMessagePeer::CREATED_AT);

    return PrivateMessagePeer::doCount($c);
  }

  public function getReadMessagesCount()
  {
    $c = new Criteria();
    $c->add(PrivateMessagePeer::RECEIVER, $this->getId());
    $c->add(PrivateMessagePeer::IS_READ, true);
    $c->add(PrivateMessagePeer::IS_DELETED, false);
    $c->addGroupByColumn(PrivateMessagePeer::THREAD);
    $c->addDescendingOrderByColumn(PrivateMessagePeer::CREATED_AT);

    return PrivateMessagePeer::doCount($c);
  }

  public function getUnreadMessagesCount()
  {
    $c = new Criteria();
    $c->add(PrivateMessagePeer::RECEIVER, $this->getId());
    $c->add(PrivateMessagePeer::IS_READ, false);
    $c->add(PrivateMessagePeer::IS_DELETED, false);
    $c->addGroupByColumn(PrivateMessagePeer::THREAD);
    $c->addDescendingOrderByColumn(PrivateMessagePeer::CREATED_AT);

    return PrivateMessagePeer::doCount($c);
  }

  public function getCollectionCategoryIds()
  {
    $c = new Criteria();
    $c->addSelectColumn(CollectionPeer::COLLECTION_CATEGORY_ID);
    $c->add(CollectionPeer::COLLECTOR_ID, $this->getId());
    $stmt = CollectionPeer::doSelectStmt($c);

    return $stmt->fetchAll(PDO::FETCH_COLUMN);
  }

  public function getRelatedCollections($limit = 10)
  {
    $collections = CollectionPeer::getRelatedCollections($this, $limit);

    if ($limit != $found = count($collections))
    {
      $limit = $limit - $found;
      $context = sfContext::getInstance();

      if ($context->getUser()->isAuthenticated())
      {
        $collector = $context->getUser()->getCollector();
        $c = new Criteria();
        $c->add(CollectionPeer::ID, $this->getId(), Criteria::NOT_EQUAL);
        $c->add(CollectionPeer::COLLECTOR_ID, $collector->getId(), Criteria::NOT_EQUAL);
        $c->addAscendingOrderByColumn('RAND()');

        $collections = array_merge($collections, CollectionPeer::getRelatedCollections($collector, $limit, $c));
      }
    }

    if (0 == count($collections))
    {
      $c = new Criteria();
      $c->add(CollectionPeer::COLLECTOR_ID, $this->getId(), Criteria::NOT_EQUAL);

      $collections = CollectionPeer::getRandomCollections($limit, $c);
    }

    return $collections;
  }

  public function getRecentCollections($limit = 2)
  {
    $c = new Criteria();
    $c->add(CollectionPeer::COLLECTOR_ID, $this->getId());
    $c->addDescendingOrderByColumn(CollectionPeer::UPDATED_AT);
    $c->setLimit($limit);

    $collections = CollectionPeer::doSelect($c);

    return $collections;
  }

  public function getTagIds()
  {
    $c = new Criteria;
    $c->addSelectColumn(TaggingPeer::TAG_ID);
    $c->add(TaggingPeer::TAGGABLE_ID, $this->getId());
    $c->add(TaggingPeer::TAGGABLE_MODEL, 'Collection');

    $stmt = TaggingPeer::doSelectStmt($c);
    $tag_ids = array();
    while ($tag_id = $stmt->fetchColumn(0))
    {
      $tag_ids[] = (int) $tag_id;
    }

    return $tag_ids;
  }

  public function getTerms()
  {
    return TermPeer::getTerms($this);
  }

  public function getCountCollections()
  {
    return $this->countCollections();
  }

  public function getCountCollectibles()
  {
    return $this->countCollectibles();
  }

  public function getCollectorFriends(Criteria $criteria = null)
  {
    $c = new Criteria();
    $c->add(CollectorFriendPeer::COLLECTOR_ID, $this->getId());
    $c->addJoin(CollectorPeer::ID, CollectorFriendPeer::FRIEND_ID);

    return CollectorPeer::doSelect($c);
  }

  public function hasFacebook()
  {
    $uid = $this->getFacebookId();

    return is_numeric($uid);
  }

  public function isFacebookOnly()
  {
    return ($this->hasFacebook() && preg_match('/^fb(\d+)$/', $this->getUsername()));
  }

  public function fromArray($array, $keyType = BasePeer::TYPE_PHPNAME)
  {
    parent::fromArray($array, $keyType);

    $keys = CollectorPeer::getFieldNames($keyType);

    if (!empty($array['password']))
    {
      $this->setPassword($array['password']);
    }
    if (isset($array['photo']))
    {
      $this->setPhoto($array['photo']);
    }
  }

  public function preDelete(PropelPDO $con = null)
  {
    // Deleting messages
    $c = new Criteria();
    $c->add(CollectorPeer::ID, PrivateMessagePeer::RECEIVER);
    $c->addOr(CollectorPeer::ID, PrivateMessagePeer::SENDER);

    $messages = PrivateMessagePeer::doSelect($c);
    if (!empty($messages))
    {
      foreach ($messages as $message)
      {
        $message->setIsDeleted(true);
        $message->save($con);
      }
    }

    // Deleting collections
    $collections = $this->getCollections();
    if (!empty($collections))
    {
      /** @var $collection Collection */
      foreach ($collections as $collection)
      {
        $collection->delete($con);
      }
    }

    // Deleting comments
    $comments = $this->getComments();
    if (!empty($comments))
    {
      foreach ($comments as $comment)
      {
        $comment->delete($con);
      }
    }

    return parent::preDelete($con);
  }

  public function __call($m, $a)
  {
    $c = new Criteria();
    $c->add(CollectorProfilePeer::COLLECTOR_ID, $this->getId());

    $profile = CollectorProfilePeer::doSelectOne($c);

    if ($profile instanceof CollectorProfile && method_exists($profile, $m))
    {
      return call_user_func_array(array($profile, $m), $a);
    }
    else
    {
      return parent::__call($m, $a);
    }
  }

  public function getLastCollectorGeocache()
  {
    $criteria = new Criteria();
    $criteria->addDescendingOrderByColumn(CollectorGeocachePeer::ID);

    return CollectorGeocachePeer::doSelectOne($criteria);
  }
}

sfPropelBehavior::add(
  'Collector', array(
    'PropelActAsSluggableBehavior' => array(
      'columns' => array(
        'from' => CollectorPeer::DISPLAY_NAME,
        'to' => CollectorPeer::SLUG
      ),
      'separator' => '-',
      'permanent' => false
    )
  )
);
