<?php
require_once dirname(__FILE__) . '/../lib/collectibleForSaleGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/collectibleForSaleGeneratorHelper.class.php';

/**
 * collectibleForSale actions.
 *
 * @package    CollectorsQuest
 * @subpackage collectibleForSale
 * @author     Kiril Angov
 * @version    SVN: $Id$
 */
class collectibleForSaleActions extends autoCollectibleForSaleActions
{

  public function buildQuery()
  {
    /* @var $query CollectibleForSaleQuery */
    $query = parent::buildQuery();

    $query->innerJoinCollectible();

    return $query;
  }

  public function executeItemOffers(sfWebRequest $request)
  {
    $this->collectible_for_sale = CollectibleForSalePeer::retrieveByPK($this->getRequestParameter('id'));
    $this->forward404Unless($this->collectible_for_sale);
    $this->collectible = $this->collectible_for_sale->getCollectible();
    $this->omCollectibleOwner = $this->collectible->getCollection()->getCollector();

    $oCriteria = new Criteria();
    $oCriteria->addAscendingOrderByColumn(CollectibleOfferPeer::COLLECTOR_ID);
    $oCriteria->addDescendingOrderByColumn(CollectibleOfferPeer::UPDATED_AT);
    $oCriteria->add(CollectibleOfferPeer::COLLECTIBLE_ID, $this->collectible->getId());
    $this->offers = CollectibleOfferPeer::doSelect($oCriteria);
  }

  public function executeExport(sfWebRequest $request)
  {
    $filename = sprintf('marketplace_export_%s.csv', date('Y_m_d_(hi)'));

    header("Expires: 0");
    header("Cache-control: private");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Description: File Transfer");
    header('Content-Type: text/csv, charset=UTF-8; encoding=UTF-8');
    header("Content-disposition: attachment; filename=". $filename);

    $out = fopen('php://output', 'w');

    $criteria = new Criteria();
    $criteria->clearSelectColumns();
    $criteria->addSelectColumn(CollectibleForSalePeer::ID);
    $criteria->addJoin(CollectibleForSalePeer::COLLECTIBLE_ID, CollectiblePeer::ID);
    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID);
    $criteria->addSelectColumn(CollectiblePeer::NAME);
    $criteria->addSelectColumn(CollectibleForSalePeer::CONDITION);
    $criteria->addSelectColumn(CollectibleForSalePeer::PRICE);
    $criteria->addSelectColumn(CollectorPeer::DISPLAY_NAME);
    $criteria->addSelectColumn(CollectibleForSalePeer::IS_PRICE_NEGOTIABLE);
    $criteria->addSelectColumn(CollectibleForSalePeer::IS_SHIPPING_FREE);
    $criteria->addSelectColumn(CollectibleForSalePeer::IS_SOLD);
    $criteria->addSelectColumn(CollectibleForSalePeer::CREATED_AT);
    
//    CollectibleForSalePeer::addSelectColumns($criteria);

    $stmt = CollectibleForSalePeer::doSelectStmt($criteria);

    if ($stmt->rowCount())
    {
      /* @var $collectibleForSale CollectibleForSale */
      while ($collectibleForSale = $stmt->fetch(PDO::FETCH_NUM))
      {
        fputcsv($out, $collectibleForSale);
      }
    }
    
    $stmt->closeCursor();
    
    fclose($out);
    return sfView::NONE;
  }
}
