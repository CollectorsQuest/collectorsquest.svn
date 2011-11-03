<?php
/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
/* @var $CollectibleForSale CollectibleForSale */
$collectible = $CollectibleForSale->getCollectible();
$collector = $collectible->getCollector();

echo $collector, "<br />\n";
?>
<a href="mailto:<?php echo $collector->getEmail() ?>"><?php echo $collector->getEmail() ?></a>
