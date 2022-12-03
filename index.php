<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

  <?php if(file_exists($root . '/template/inc/menu/main.php')){
    require_once $root . '/template/inc/menu/main.php';
  }?>

<?php require_once $root . '/template/shared/footer.php'; ?>