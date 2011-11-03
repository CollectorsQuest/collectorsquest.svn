<?php
/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
/* @var $CollectibleForSale CollectibleForSale */
$offer = $CollectibleForSale->getSoldOffer();

if ($offer) {
  echo '<pre>';
var_dump($offer);
echo '</pre>';

  echo $offer->getUpdatedAt('m/d/y H:M');
}