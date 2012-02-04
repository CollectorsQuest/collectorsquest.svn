<?php
  /* @var $wpPost wpPost */
  $wpPost;

  $post_text = strip_tags($wpPost->getPostContent());

  echo mb_strlen($post_text, 'utf-8');