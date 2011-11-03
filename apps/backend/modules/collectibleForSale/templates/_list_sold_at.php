<?php
/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
/* @var $CollectibleForSale CollectibleForSale */
$offer = $CollectibleForSale->getSoldOffer();

if ($offer) {
  echo $offer->getUpdatedAt('m/d/Y H:i');
}