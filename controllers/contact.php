<?php
include_once "include/util.php";
include_once "include/Parsedown.php";

function dumpArray($elements) {
  $result = "<ol>\n";
  foreach ($elements as $key => $value) {
    if (is_array($value)) {
      $result .= "<li>Key <b>$key</b> is an array
          containing:" . dumpArray($value) . "</li>\n";
    } else {
      $value = nl2br(htmlspecialchars($value)); 
      $result .= "<li>Key <b>$key</b> has value <b>$value</b></li>\n";
    }
  }
  return $result . "</ol>\n";
}

function post_view() {
  $form = safeParam($_POST, 'form');
  $parsedown = new ParseDown();
  renderTemplate(
    "views/view_contact.php",
    array(
      'title' => 'PHP Rich Text Editing',
      'form' => $form,
      'parsedown' => $parsedown
    )
  );
}

?>