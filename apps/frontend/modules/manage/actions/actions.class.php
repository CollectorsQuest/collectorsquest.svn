<?php

/**
 * manage actions.
 *
 * @package    CollectorsQuest
 * @subpackage manage
 * @author     Kiril Angov
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class manageActions extends cqActions
{
  /**
   * @param  sfWebRequest  $request
   * @return string
   */
  public function executeProfile(sfWebRequest $request)
  {
    /**
     * This variable is for us to know which box to make active in the navigation
     */
    $request->setAttribute('header_icons_active', 'profile');

    $collector = $this->getCollector();
    $form = new CollectorEditForm($collector);

    if ($request->isMethod('post'))
    {
      $form->bind($request->getParameter('collector'), $request->getFiles('collector'));
      if ($form->isValid())
      {
        $form->save();

        // Clear the Geo Cache
        CollectorGeocacheQuery::create()->filterByCollectorId($collector->getId())->delete();

        // Send the profile data to Impermium to analyse
        $collector->sendToImpermium('UPDATE');

        $this->getUser()->setFlash('success', 'Your profile/account information was updated.');
      }
      else
      {
        $this->getUser()->setFlash('error', 'There were some problems, please take a look below.');
      }
    }

    // Make the Form and Collector available in the template
    $this->form = $form;
    $this->collector = $collector;

    $this->addBreadcrumb($this->__('Collectors'), '@collectors');
    $this->addBreadcrumb($this->__('Your Profile'));

    $this->prependTitle($this->__('Your Profile'));

    return sfView::SUCCESS;
  }

  /**
   * @param   sfWebRequest  $request
   * @return  string
   */
  public function executeCollections(sfWebRequest $request)
  {
    /**
     * This variable is for us to know which box to make active in the navigation
     */
    $request->setAttribute('header_icons_active', 'collections');

    // Get the collections of the current collector
    $c = new Criteria();
//    $c->setDistinct();
    $c->add(CollectionPeer::COLLECTOR_ID, $this->getUser()->getId());
    $c->addDescendingOrderByColumn(CollectionPeer::CREATED_AT);

    $per_page = ($request->getParameter('show') == 'all') ? 999 : sfConfig::get('app_pager_manage_collections_max', 10);

    $pager = new sfPropelPager('Collection', $per_page);
    $pager->setCriteria($c);
    $pager->setPeerMethod('doSelectJoinCollector');
    $pager->setPeerCountMethod('doCountJoinCollector');

    $page = $request->getParameter('page', 1);
    $pager->setPage($page);
    $pager->init();

    $this->pager = $pager;
    $this->collections = $pager->getResults();

    $this->bIsSeller = false;
    $ssTitle = $this->__('Your Collections');
    if ($this->getUser()->hasCredential('seller'))
    {
      $this->bIsSeller = true;
      $ssTitle = $this->__('Upload Your Collectibles For Sale');
    }

    if ($this->bIsSeller && count($this->collections) == 0)
    {
      $this->getUser()->setFlash('highlight', 'Create a collection to sell your items. <a href="' . $this->generateUrl('collection_create') . '">Click here</a> to upload your pictures.');
    }
    else if (count($this->collections) == 0)
    {
      $this->getUser()->setFlash('highlight', 'You have no collections yet! <a href="' . $this->generateUrl('collection_create') . '">Click here</a> to create one and start selling items.');
    }

    $this->addBreadcrumb($this->__('Collections'), '@collections');
    $this->addBreadcrumb($ssTitle);

    $this->prependTitle($ssTitle);

    return sfView::SUCCESS;
  }

  public function executeCollection(sfWebRequest $request)
  {
    /**
     * This variable is for us to know which box to make active in the navigation
     */
    $request->setAttribute('header_icons_active', 'collections');

    if ($this->getRoute() instanceof sfPropelRoute)
    {
      $collection = $this->getRoute()->getObject();
    }
    else
    {
      $collection = CollectionPeer::retrieveByPK($request->getParameter('collection[id]'));
    }
    $this->forward404Unless($collection && $this->getUser()->isOwnerOf($collection));

    if ($request->getParameter('cmd'))
    {
      switch ($request->getParameter('cmd'))
      {
        case 'delete':
          $collection_name = $collection->getName();
          $collection->delete();
          $this->getUser()->setFlash('success', sprintf($this->__('Your collection "%s" was deleted!'), $collection_name));

          return $this->redirect('@manage_collections');
          break;
      }
    }

    $form = new CollectionEditForm($collection);

    if ($request->isMethod('post'))
    {
      $form->bind($request->getParameter('collection'), $request->getFiles('collection'));

      if ($form->isValid())
      {
        $collection = $form->getObject();
        $collection->setCollectionCategoryId($form->getValue('collection_category_id'));
        $collection->setName($form->getValue('name'));
        $collection->setDescription($form->getValue('description'), 'html');
        $collection->setTags($form->getValue('tags'));

        try
        {
          $collection->save();

          if ($form->getValue('thumbnail'))
          {
            // Set the collection thumbnail from the uploaded file, after we save the collection above
            $collection->setThumbnail($form->getValue('thumbnail')->getTempName());
          }

          $this->getUser()->setFlash("success", $this->__('Changes were saved!'));
        }
        catch (PropelException $e)
        {
          $this->getUser()->setFlash("error", $this->__('There was a problem saving the information you provided!'));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', $this->__('There were some problems, please take a look below.'));
      }
    }

    $this->collection = $collection;
    $this->form = $form;

    $this->addBreadcrumb($this->__('Your Collections'), '@manage_collections');
    $this->addBreadcrumb($collection->getName());

    $this->prependTitle($collection->getName());

    return sfView::SUCCESS;
  }

  /**
   * @param  sfWebRequest  $request
   * @return string|void
   */
  public function executeCollectible(sfWebRequest $request)
  {
    /**
     * This variable is for us to know which box to make active in the navigation
     */
    $request->setAttribute('header_icons_active', 'collections');

    if ($this->getRoute() instanceof sfPropelRoute)
    {
      $collectible = $this->getRoute()->getObject();
      $collection = $collectible->getCollection();
    }
    else
    {
      $collectible = CollectiblePeer::retrieveByPK($request->getParameter('id'));
      $collection = $collectible->getCollection();
    }
    $this->forward404Unless($collectible && $this->getUser()->isOwnerOf($collectible));

    if ($request->getParameter('cmd'))
    {
      switch ($request->getParameter('cmd'))
      {
        case 'delete':
          $collectible_name = $collectible->getName();
          $collectible->delete();
          $this->getUser()->setFlash('success', sprintf($this->__('Collectible "%s" was deleted!'), $collectible_name));

          return $this->redirect('@collection_by_slug?id=' . $collection->getId() . '&slug=' . $collection->getSlug());
          break;
      }
    }

    $form = new CollectibleEditForm($collectible);

    if ($this->bIsSeller = $this->getUser()->hasCredential('seller'))
    {
      $itemForSale = $collectible->getForSaleInformation();
      if (!$itemForSale)
      {
        $itemForSale = new CollectibleForSale();
        $itemForSale->setCollectibleId($collectible->getId());
      }

      $omItemForSaleForm = new CollectibleForSaleForm($itemForSale);
    }

    if ($request->isMethod('post'))
    {
      $form->bind($request->getParameter('collectible'), $request->getFiles('collectible'));

      if ($this->bIsSeller && isset($omItemForSaleForm))
      {
        $omItemForSaleForm->bind($request->getParameter($omItemForSaleForm->getName()));
      }

      if ($form->isValid())
      {
        $form->save();

        if ($this->bIsSeller)
        {
          if (isset($omItemForSaleForm) && $omItemForSaleForm->save())
          {
            if ($omItemForSaleForm->getValue('is_ready'))
            {
              $message = $this->__(
                  'Your collectible has been posted to the Marketplace. Click <a href="%url%">here</a> to view your collectibles for sale!', array('%url%' => $this->generateUrl('manage_marketplace'))
              );
            }
            else
            {
              $message = $this->__('Changes were saved!');
            }

            $this->getUser()->setFlash('success', $message);
            $this->redirect('manage_collectible_by_slug', $form->getObject());
          }
        }
        else
        {
          $message = $this->__('Changes were saved!');
        }
      }
      else
      {
        $this->getUser()->setFlash('error', $this->__('Error occured while trying to save'));
      }
    }

    $this->collection = $collection;
    $this->collectible = $collectible;

    $this->form = $form;
    $this->omItemForSaleForm = isset($omItemForSaleForm) ? $omItemForSaleForm : null;

    $this->addBreadcrumb($this->__('Your Collections'), '@manage_collections');
    $this->addBreadcrumb($collection->getName(), '@collection_by_slug?id=' . $collection->getId() . '&slug=' . $collection->getSlug());
    $this->addBreadcrumb($collectible->getName());

    $this->prependTitle($collectible->getName());

    return sfView::SUCCESS;
  }

  /**
   * @param  sfWebRequest  $request
   * @return string
   */
  public function executeMarketplace(sfWebRequest $request)
  {
    /**
     * This variable is for us to know which box to make active in the navigation
     */
    $request->setAttribute('header_icons_active', 'marketplace');

    $this->collectibles_for_sale = CollectibleForSalePeer::doSelectByCollector($this->getUser()->getCollector(), true);
    $this->collectibles_sold = CollectibleForSalePeer::doSelectByCollector($this->getUser()->getCollector(), false);
    $this->collectibles_buying = CollectibleOfferPeer::doSelectByCollector($this->getUser()->getCollector());
    $this->collectibles_bought = CollectibleOfferPeer::doSelectByCollector($this->getUser()->getCollector(), 'accepted');

    $this->addBreadcrumb($this->__('Your Market'));
    $this->prependTitle($this->__('Your Market'));

    if (!$this->collectibles_for_sale && !$this->collectibles_sold && !$this->collectibles_buying && !$this->collectibles_bought)
    {
      if ($this->getUser()->hasCredential('seller'))
      {
        $this->getUser()->setFlash('highlight', $this->__('%username%, want some fast cash? Sell your collectibles today!', array('%username%' => $this->getUser()->getCollector())));
      }
      else
      {
        $this->getUser()->setFlash(
          'highlight', sprintf(
            '%s, do you want to expand your collection? <a href="%s">Buy collectibles today!</a>', $this->getUser()->getDisplayName(), $this->generateUrl('marketplace')
          )
        );
      }

      return 'Empty';
    }

    return sfView::SUCCESS;
  }

  /**
   * @param  sfWebRequest  $request
   * @return string
   */
  public function executeFriends(sfWebRequest $request)
  {
    /**
     * This variable is for us to know which box to make active in the navigation
     */
    $request->setAttribute('header_icons_active', 'friends');

    $collector = $this->getCollector();

    $this->addBreadcrumb($this->__('Your Friends'));
    $this->prependTitle($this->__('Your Friends'));

    $this->friends = $collector->getCollectorFriends();

    return sfView::SUCCESS;
  }

  /**
   * @param  sfWebRequest  $request
   * @return string
   */
  public function executeCollectibles(sfWebRequest $request)
  {
    /* @var $collection Collection */
    $collection = $this->getRoute()->getObject();
    $this->forward404Unless($this->getCollector()->isOwnerOf($collection));

    $criteria = new Criteria();
    $criteria->add(CollectiblePeer::COLLECTION_ID, $collection->getId(), Criteria::EQUAL);

    $pager = new sfPropelPager('Collectible', sfConfig::get('app_collectibles_edit_per_page', 5));
    $pager->setPage($request->getParameter('page', 1));
    $pager->setCriteria($criteria);
    $pager->init();

    if (!$pager->getNbResults())
    {
      $this->redirect('@manage_collections');
    }

    $form = new ManageCollectiblesForm(array('collectibles' => $pager->getResults(), 'user' => $this->getUser()->getCollector()));

    if ($request->isMethod('post'))
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

      if ($form->isValid())
      {
        $collector = $this->getUser()->getCollector();
        try
        {
          foreach ($form->getValues() as $index => $value)
          {
            $collectible = CollectiblePeer::retrieveByPK($value['id']);
            $collectible->setName($value['name']);
            $collectible->setDescription($value['description'], 'html');
            $collectible->setTags(is_array($value['tags']) ? implode(', ', $value['tags']) : $value['tags']);
            $collectible->clearCollectibleForSales();
            $collectible->save();

            if ($value['thumbnail'])
            {
              $collection = $collectible->getCollection();

              if (!$collection->hasThumbnail())
              {
                $collection->setThumbnail($value['thumbnail']->getTempName());
                $collection->save();
              }

              $collectible->addMultimedia($value['thumbnail'], true);
            }

            if ($value['for_sale']['is_ready'] || $value['for_sale']['price'] || !is_null($value['for_sale']['id']))
            {
              if (empty($value['for_sale']['id']) or !$collectibleForSale = CollectibleForSalePeer::retrieveByPK($value['for_sale']['id']))
              {
                if (empty($value['for_sale']['price']))
                {
                  continue;
                }
                $collectibleForSale = new CollectibleForSale();
                $collectibleForSale->setCollectible($collectible);
              }

              $collectibleForSale->fromArray($value['for_sale'], BasePeer::TYPE_FIELDNAME);
              $collectibleForSale->save();
            }

            if ($value['for_sale']['is_ready'])
            {
              $collector->setItemsAllowed($collector->getItemsAllowed() - 1);
              $collector->save();
            }
          }
        }
        catch (PropelException $e)
        {
          // currently just skip the errors
        }

        $this->getUser()->setFlash('success', 'Collectible data saved');

        if ($pager->isLastPage())
        {
          $this->redirect('collection_by_slug', $collection);
        }
        else
        {
          $this->redirect(
            'manage_collectibles_by_slug', array(
            'id' => $collection->getId(),
            'slug' => $collection->getSlug(),
            'page' => $pager->getNextPage()
            )
          );
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'Some fields are invalid');
      }
    }

    $this->collection = $collection;
    $this->form = $form;

    $this->addBreadcrumb($collection->getName(), '@manage_collections');
    $this->addBreadcrumb($this->__('Manage Collectibles'));

    $this->prependTitle($collection->getName());

    return sfView::SUCCESS;
  }
}
