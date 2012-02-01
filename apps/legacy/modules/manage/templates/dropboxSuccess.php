
<div class="clear" style="height: 20px;">&nbsp;</div>
<div id="update_view_collectible">
<?php
  foreach ($pager->getResults() as $i => $collectible)
  {
    // Show the collectible (in grid, list or hybrid view)
    include_partial(
      'collection/'. $display .'_view_collectible',
      array('collectible' => $collectible, 'editable' => true, 'culture' => $sf_user->getCulture(), 'i' => $i)
    );
  }
?>
</div>
<br class="clear"><br>
<div class="span-19 last" style="margin-bottom: 25px">
  <?php
    include_partial(
      'global/pager',
      array('pager' => $pager, 'options' => array('url' => $sf_request->getPathInfo(), 'update' => 'update_view_collectible'))
    );
  ?>
</div>

<?php if (!$sf_user->isAuthenticated()): ?>
<!--
<div class="span-19 append-bottom last">
  <?php cq_ad_slot('collectorsquest_com_-_After_Listing_728x90', '728', '90'); ?>
</div>
//-->
<?php endif; ?>
