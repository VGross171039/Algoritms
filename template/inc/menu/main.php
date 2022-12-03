<div class="col-50">
  <?php if(file_exists($root . '/template/inc/menu/menuleft.php')){
    require_once $root . '/template/inc/menu/menuleft.php';
  }?>
</div>
<div class="col-50">
  <?php if(file_exists($root . '/template/inc/menu/menuright.php')){
    require_once $root . '/template/inc/menu/menuright.php';
  }?>
</div>