<?php
/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
/* @var $CollectibleForSale CollectibleForSale */
$offer = $CollectibleForSale->getSoldOffer();

if ($offer)
{
  $collector = $offer->getCollector();
  echo $collector, "<br />\n";
  ?>
  <a href="mailto:<?php echo $collector->getEmail() ?>"><?php echo $collector->getEmail() ?></a>
  <?php
}