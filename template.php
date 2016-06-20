<?php
/**
  Disable the separate "name's blog" link in the links array below full post.
*/
function loyalist_lib_unb_ca_preprocess_node(&$variables) {
  if (isset($variables['content']['links']['blog']['#links']['blog_usernames_blog'])) {
    unset ($variables['content']['links']['blog']['#links']['blog_usernames_blog']);
  }
}
