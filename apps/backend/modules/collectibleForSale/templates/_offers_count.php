<?php
/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
/* @var $CollectibleForSale CollectibleForSale */
echo link_to_if(
  $CollectibleForSale->getActiveCollectibleOffersCount(), 
  $CollectibleForSale->getActiveCollectibleOffersCount(), 
  'item_offers', 
  array('id'=>$CollectibleForSale->getId())
    );