<?php
  $post = $wp_query->post;
  if (in_category('tldrarchives')) {
      include(TEMPLATEPATH.'/single-tldrarchives.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>