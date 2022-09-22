<?php
function escape($val){
  global $db;
  return $db->real_escape_string(htmlspecialchars(trim($_POST[$val])));
}
function escape_get($val){
  global $db;
  return $db->real_escape_string(htmlspecialchars(trim($_GET[$val])));
}
?>
