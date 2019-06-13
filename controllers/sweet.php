<?php
function get_index() {
  renderTemplate(
    "views/sweet.php",
    array(
      'title' => 'My Sweet Form'
    )
  );

}
?>