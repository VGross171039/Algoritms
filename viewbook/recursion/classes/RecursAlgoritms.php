<?php 
// Факториал числа
function fact($number){
  if($number <= 0){
    return 1;
  } else {
    return $number * fact($number - 1);
  }
}

// Последовательность Фибоначчи
function F($number){
  if($number <= 1){
    return 1;
  } else {
    return $number + F($number - 1);
  }
}

// Поиск максимального элемента в массиве

?>