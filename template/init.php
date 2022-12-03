<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
if(file_exists($root . '/template/source/functions.php')){
  require_once $root . '/template/source/functions.php';
}
if(file_exists($root . '/template/source/constants.php')){
  require_once $root . '/template/source/constants.php';
}
if(file_exists($root . '/template/source/handlers.php')){
  require_once $root . '/template/source/handlers.php';
}
if(file_exists($root . '/template/inc/title/maintitle.php')){
  require_once $root . '/template/inc/title/maintitle.php';
}
?>