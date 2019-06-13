<?php
include_once('include/util.php');

function get_index() {
  renderTemplate(
    "views/sweet.php",
    array(
      'title' => 'My Sweet Form'
    )
  );
}

function post_simple() {
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
}
?>