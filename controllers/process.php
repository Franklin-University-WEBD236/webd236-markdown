<?php
include_once "include/util.php";

function dumpArray($elements) {
  $result = "<ol>\n";
  foreach ($elements as $key => $value) {
    if (is_array($value)) {
      $result .= "<li>Key <b>$key</b> is an array
          containing:" . dumpArray($value) . "</li>\n";
    } else {
      $value = nl2br(htmlspecialchars($value)); 
      $result .= "<li>Key <b>$key</b> has value<b>$value</b></li>\n";
    }
  }
  return $result . "</ol>\n";
}

function post_dump() {
  renderTemplate(
    "views/formdump.php",
    array(
      'title' => 'PHP Forms Examples variable dump',
      'variables' => $_POST
    )
  );
}
?>