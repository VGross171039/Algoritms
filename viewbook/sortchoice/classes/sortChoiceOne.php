<?php 
// Сначала создаем функцию для поиска наименьшего элемента массива

$arr = [5, 3, 6, 2, 10];

function findSmall(array $arr)
{
  $smallest = $arr[0];
  $smallestIndex = 0;
  for($i = 0; $i < count($arr); $i++){
    if ($arr[$i] < $smallest) {
      $smallest = $arr[$i];
      $smallestIndex = $i;
    }
  }
  return $smallestIndex;
}

$minIndex = findSmall($arr);
echo $minIndex . '<br>';
$minValue = $arr[$minIndex];
echo $minValue . '<br>';

?>

<hr>

<?php 
// На основе функции findSmall() пишем функцию сортировки выбором

function selectionSort(array $arr)
{
    $newArr = [];
    for ($i = 0, $length = count($arr); $i < $length; $i++) {
        $smallest = findSmall($arr);
        array_push($newArr, array_splice($arr, $smallest, 1)[0]);
    }
    return $newArr;
}

print_arr(selectionSort([5, 3, 6, 2, 10]));

?>