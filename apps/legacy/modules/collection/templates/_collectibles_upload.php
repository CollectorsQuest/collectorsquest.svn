<div class="span-10" style="text-align: center; margin: auto;">
  <input type="file" id="uploader">
</div>

<script type="text/javascript">
$(document).ready(function()
{
  $('#uploader').uploadify(
  {
    'script':  '<?= url_for('@ajax_collection?section=upload&page=collectibles&id=' . (isset($collection) ? $collection->getId() : 0)); ?>',
    'scriptData': {'_session_id': $.cookie('legacy')},
    'uploader':  '/swf/uploadify.swf', 'expressInstall' : '/swf/install.swf',
    'folder':  '/uploads',
    'multi':  true, 'auto':  true,
    'fileDesc':  '<?= __('Please select high quality image files'); ?>',
    'fileExt':  '*.jpg;*.jpeg;*.png;*.gif',
    'cancelImg':  '/images/legacy/cancel.png',

    onOpen: function()
    {
      $('#fancybox-title').html('<?= image_tag('loading.bar.gif', array('style' => 'float: left;')); ?> Uploading the image files, please wait...');

      return true;
    },
    onAllComplete: function()
    {
      document.location.replace('<?= url_for_collection($collection); ?>');

      return true;
    }
  });
});
</script>
