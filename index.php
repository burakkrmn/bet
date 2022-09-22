<?php
  include 'inc/config.php';
  $q = explode("/", $_GET['q']);
  $page = "main";
  if (file_exists('view/'.$q[0].'.php')) {
    $page = $q[0];
  }
  include 'view/modules/header.php';
  include 'view/'.$page.'.php';
  include 'view/modules/footer.php';
?>
