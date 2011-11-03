<?php
  include_partial(
    'global/wizard_bar',
    array('steps' => array(1 => __('Choose Category'), __('Describe Collection'), __('Add Collectibles')), 'active' => 1)
  );
?>

<?php slot('sidebar'); ?>
  <h2 style="margin-top: 10px;">Quick Tips</h2>
  <div style="margin: 0 10px;">
    <p>Choosing the <b>right category</b> for your collection is important, because:</p>
    <ol style="margin: 0; padding-left: 25px;">
      <li style="margin-bottom: 10px;">Other fellow users will be able to find it in the place they are expecting to.</li>
      <li style="margin-bottom: 10px;">When you describe your collectibles, we give you a different form depending on the collection category.</li>
    </ol>
  </div>
<?php end_slot(); ?>

<ul class="prepend-1">
<?php foreach ($categories as $category): ?>
  <li class="span-5" style="float: left; margin: 5px 0; margin-left: 30px;">
    <?= ($category) ? link_to($category->getName(), '@collection_create?step=2&collection_category_id='. $category->getId()) : ''; ?>
  </li>
<?php endforeach; ?>
<li class="span-5" style="float: left; margin: 5px 0; margin-left: 30px;">
  <b><?= link_to('Other', '@collection_create?step=2&collection_category_id=35', array('class' => 'action')); ?></b>
</li>
</ul>
