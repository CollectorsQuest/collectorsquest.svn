<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>

  <meta property="fb:app_id" content="12734695313"/>
  <meta property="og:site_name" content="Collectors' Quest - Where Hunters Gather"/>
  <?php if ($sf_response->getCanonicalUrl()): ?>
  <meta property="og:url" content="<?php echo $sf_response->getCanonicalUrl(); ?>"/>
  <?php endif; ?>
  <?php include_slot('facebook_metas'); ?>

  <link rel="shortcut icon" href="/favicon.ico"/>

  <link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen, projection">
  <link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
  <!--[if lt IE 8]>
  <link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
  <link href="/css/frontend/jquery.css" rel="stylesheet" type="text/css" media="screen, projection"/>
  <?php
      if (has_component_slot('sidebar'))
      {
        use_stylesheet('frontend/sidebar.css');
      }

      sfConfig::set('symfony.asset.stylesheets_included', true);
      $css = @implode(',', array_keys($sf_response->getStylesheets()));
    ?>
  <?php if (!empty($css)): ?>
  <link rel="stylesheet" type="text/css" media="screen"
        href="/combine.php?type=css&files=<?php echo $css; ?>&revision=<?php echo SVN_REVISION; ?>" />
  <?php endif; ?>

  <!--[if lt IE 8]>
  <link rel="stylesheet" href="/css/frontend/ie.css" type="text/css" media="screen, projection"><![endif]-->

  <?php if ('dev' == SF_ENV):  ?>
    <script type="text/javascript" src="/js/jquery.js"></script>
  <?php else:  ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
  <?php endif;  ?>

  <!--[if IE]><script type="text/javascript" src="/js/excanvas.js"></script><![endif]-->

  <!--[if IE 6]>
  <script type="text/javascript">
    var IE6UPDATE_OPTIONS = {
      icons_path: "/images/frontend/ie6update/",
      message: "<?= __('Internet Explorer is missing updates required to view this site. Click here to update...'); ?>",
      url: "http://www.google.com/chromeframe"
    }
  </script>
  <script type="text/javascript" src="/js/ie6update.js"></script>
  <![endif]-->

  <script type="text/javascript">
    if (top.location != self.location)
    {
      top.location.replace(self.location);
    }
  </script>

  <link rel="shortcut icon" href="<?php echo image_path('favicon.ico', true); ?>"/>
  <link rel="icon" type="image/png" href="<?php echo image_path('favicon.png', true); ?>"/>

  <?php if ($sf_response->getCanonicalUrl()): ?>
  <link rel="canonical" href="<?php echo $sf_response->getCanonicalUrl(); ?>"/>
  <?php endif; ?>

  <?php if (SF_ENV != 'dev'): ?>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher:'b69d7375-23f2-424c-9d59-f6bf47e9a722'});</script>
  <?php endif; ?>
</head>
<body>
<!-- Include the VML behavior -->
<style>v\:image {
  behavior: url(#default#VML);
  display: inline-block
}</style>
<!-- Declare the VML namespace -->
<xml:namespace ns="urn:schemas-microsoft-com:vml" prefix="v"/>

<div class="container">
  <?php include_partial('global/header', array('collector' => $sf_user->getCollector())); ?>
  <?php include_partial('global/navigation', array('collector' => $sf_user->getCollector())); ?>
  <?php include_component('general', 'breadcrumbs',  array('root' => array('text' => __('Home'), 'uri' => '@homepage'))); ?>
