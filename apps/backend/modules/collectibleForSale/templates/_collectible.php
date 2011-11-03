<?php
/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
/* @var $CollectibleForSale CollectibleForSale */
echo link_to($CollectibleForSale->getCollectible(), 'item_offers', array('id'=>$CollectibleForSale->getId(), 'action'=>'items'));