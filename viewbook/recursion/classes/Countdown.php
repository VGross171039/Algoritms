<?php 
function countdown($num){
  echo $num . ' ';
  if($num <= 1){
    return;
  } else {
    countdown($num - 1);
  }
}

?>