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
      $result .= "<li>Key <b>$key</b> has value <b>$value</b></li>\n";
    }
  }
  return $result . "</ol>\n";
}

function checkAccount() {
  $errors = array();
  if (!$_POST['firstName']) {
    $errors['firstName'] = "Content may not be empty.";
  }

  if (!$post['title']) {
    $errors['title'] = "Title may not be empty.";
  }

  return $errors;

}
function post_account() {
  $errors = checkAccount();
  renderTemplate(
    "views/process.php",
    array(
      'title' => 'PHP Forms Examples variable dump',
      'variables' => $_POST
    )
  );
}

function post_contact() {
  renderTemplate(
    "views/process.php",
    array(
      'title' => 'PHP Forms Examples variable dump',
      'variables' => $_POST
    )
  );
}

?>