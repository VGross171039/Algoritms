<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>
<?php require_once 'classes/binarySearch.php';?>

<h2>Простой поиск<span>Выполняется за линейное время - O(n)</span></h2>
<h2>Бинарный поиск<span>Выполняется за логарифмическое время - O(Log n)</span></h2>
<hr>
<?php 

$array = [-3, -1, 1, 3, 5, 7, 9];

echo binarySearch(3, $array) . '<br>';
echo binarySearch(31, $array) . '<br>';

?>
<hr>
<h2>«О-большое»<span>Специальная нотация «0-болъшое» описывает скорость работы алгоритма.<br> При этом «О-большое»
    описывает худший возможный случай. <br>Наряду с временем худшего случая также полезно учитывать среднее время
    выполнения алгоритма</span></h2>

<h2>Основные алгоритмы сортировки
  <span>
    Бинарный поиск O(log п ) <br>
    Простой поиск О(п) <br>
    Быстрая сортировка О(п * log п) <br>
    Сортировка выбором О(п2 ) <br>
    Задача о коммивояжере О(п! ) <br><br>
    Скорость выполнения снижается вниз по списку
  </span>
</h2>

<?php require_once $root . '/template/shared/footer.php'; ?>