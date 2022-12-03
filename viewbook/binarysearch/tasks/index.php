<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<?php 
$fruits = array("lemon", "orange", "banana", "apple");
print_arr($fruits);

sort($fruits);
print_arr($fruits);

function fruitsSearch($needFruit, $fruits) {
  $low = 0;
  if($fruits[$low] == $needFruit){
    echo $low;
  }
}

?>

<?php require_once $root . '/template/shared/footer.php'; ?>