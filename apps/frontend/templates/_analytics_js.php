<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  try
  {
    var pageTracker = _gat._getTracker('UA-669177-1');
    pageTracker._trackPageview();
  } catch(err) {}
</script>

<script type="text/javascript">
  try
  {
    var pageTracker2 = _gat._getTracker('UA-225576-17');
    pageTracker2._setDomainName('collectorsquest.com');
    pageTracker2._addIgnoredRef('collectorsquest.com');
    pageTracker2._trackPageview();
  } catch(err) {}
</script>

<script type="text/javascript" language="JavaScript">
  var omniture = {
    s_account: "aetncollectorsquest",
    linkInternalFilters: ".collectorsquest.com",
    visitorMigrationServer: "",
    visitorMigrationServerSecure: ""
  };
</script>
<script type="text/javascript" src="http://www.history.com/js/s_code.js"></script>
<script type="text/javascript">
  <?php echo ($sf_params->get('purchase') == '1') ? 's.events = "event80";' : 's.events = "";'; ?>
  s.eVar11 = document.title;

  var s_code = s.t();
  if(s_code) document.write(s_code);
</script>

<script type="text/javascript" src="http://static.woopra.com/js/woopra.v2.js"></script>
<script type="text/javascript">
  <?php if ($sf_user->isAuthenticated()): ?>
    woopraTracker.addVisitorProperty('name', '<?= $sf_user->getCollector()->getDisplayName(); ?>');
    woopraTracker.addVisitorProperty('avatar', '<?= src_tag_collector($sf_user->getCollector(), '100x100'); ?>');
  <?php endif; ?>
  woopraTracker.track();
</script>

