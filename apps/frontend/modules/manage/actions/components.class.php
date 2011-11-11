<?php

class manageComponents extends sfComponents
{
  public function executeSidebarProfile()
  {
    $this->buttons = array(
      0 => array(
        'text' => 'View Your Profile',
        'icon' => 'note',
        'route' => '@collector_by_id?id='.$this->getUser()->getId().'&slug='.$this->getUser()->getSlug()
      )
    );

    return sfView::SUCCESS;
  }

  public function executeSidebarFriends()
  {
    $this->buttons = array(
      0 => array(
        'text' => 'View Your Profile',
        'icon' => 'note',
        'route' => '@collector_by_id?id='.$this->getUser()->getId().'&slug='.$this->getUser()->getSlug()
      )
    );

    return sfView::SUCCESS;
  }

  public function executeSidebarCollections()
  {
    $this->buttons = array(
      0 => array(
        'text' => 'Create a Collection',
        'icon' => 'plus',
        'route' => '@collection_create'
      )
    );

    return sfView::SUCCESS;
  }

  public function executeSidebarCollection()
  {
    $collection = CollectionPeer::retrieveByPK($this->getRequestParameter('id', $this->getRequestParameter('collection[id]')));

    $this->buttons = array(
      0 => array(
        'text' => 'Back to Your Collections',
        'icon' => 'arrowreturnthick-1-w',
        'route' => '@manage_collections'
      )
    );

    if ($collection instanceof Collection)
    {
      $this->buttons[] = array(
        'text' => 'Add Collectibles',
        'icon' => 'plus',
        'route' => 'fancybox_collection_add_collectibles('. $collection->getId() .')'
      );
      $this->buttons[] = array(
        'text' => 'View Collectibles',
        'icon' => 'image',
        'route' => '@collection_by_slug?id='. $collection->getId() .'&slug='. $collection->getSlug()
      );
    }

    return sfView::SUCCESS;
  }

  public function executeSidebarCollectible()
  {
    $collectible = CollectiblePeer::retrieveByPK($this->getRequestParameter('id', $this->getRequestParameter('collectible[id]')));

    if ($collectible instanceof Collectible)
    {
      $collection = $collectible->getCollection();

      $this->buttons = array(
        0 => array(
          'text' => 'Back to Collection',
          'icon' => 'arrowreturnthick-1-w',
          'route' => '@collection_by_slug?id='. $collection->getId() .'&slug='. $collection->getSlug()
        ),
        1 => array(
          'text' => 'View Collectible',
          'icon' => 'image',
          'route' => '@collectible_by_slug?id='. $collectible->getId() .'&slug='. $collectible->getSlug()
        ),
        2 => array(
          'text' => 'Delete Collectible',
          'icon' => 'trash',
          'route' => '@manage_collectible_by_slug?id='. $collectible->getId() .'&slug='. $collectible->getSlug() .'&cmd=delete'
        )
      );
    }

    return sfView::SUCCESS;
  }

  public function executeSidebarCollectibles()
  {
    $collection = CollectionPeer::retrieveByPK($this->getRequestParameter('id'));

    if ($collection instanceof Collection)
    {
      $this->buttons = array(
        0 => array(
          'text' => 'Back to Collection',
          'icon' => 'arrowreturnthick-1-w',
          'route' => '@collection_by_slug?id='. $collection->getId() .'&slug='. $collection->getSlug()
        ),
        array(
          'text' => 'Add Collectibles',
          'icon' => 'plus',
          'route' => 'fancybox_collection_add_collectibles('. $collection->getId() .')'
        ),
        array(
          'text' => 'View Collectibles',
          'icon' => 'image',
          'route' => '@collection_by_slug?id='. $collection->getId() .'&slug='. $collection->getSlug()
        )
      );
    }

    return sfView::SUCCESS;
  }

  public function executeSidebarMarketplaceEmpty()
  {
    if ($this->getUser()->hasCredential('seller'))
    {
      /** @var $collector Collector */
      $collector = $this->getUser()->getCollector();

      $this->buttons = array(
        0 => array(
          'text' => 'Sell Your Collectibles',
          'icon' => 'plus',
          'route' => $collector->countCollections() == 0 ? '@collection_create' : '@manage_collections'
        ),
        1 => array(
          'text' => 'Buy Collectibles',
          'icon' => 'plus',
          'route' => '@marketplace'
        )
      );
    }
    else
    {
      $this->buttons = array(
        0 => array(
          'text' => 'Sell Your Collectibles',
          'icon' => 'plus',
          'route' => '@seller_become'
        ),
        1 => array(
          'text' => 'Buy Collectibles',
          'icon' => 'plus',
          'route' => '@marketplace'
        )
      );
    }

    return sfView::SUCCESS;
  }
}
