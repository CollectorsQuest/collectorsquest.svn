<?php
/**
 * @var $form FeaturedForm
 * @var $FeaturedWeek Featured
 * @var $configuration featuredWeeksGeneratorConfiguration
 * @var $helper featuredWeeksGeneratorHelper
 */
?>

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@featured_weeks') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('featuredWeeks/form_fieldset', array('FeaturedWeek' => $FeaturedWeek, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    <?php include_partial('featuredWeeks/form_actions', array('FeaturedWeek' => $FeaturedWeek, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  <?php echo '</form>'; ?>
</div>
