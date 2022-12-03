<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>
<?php require_once 'classes/Countdown.php';?>
<?php require_once 'classes/RecursAlgoritms.php';?>

<h2>Шпаргалка</h2>
<ul class="addinfo">
  <li>Когда функция вызывает саму себя, это называется рекурсией</li>
  <li>В каждой рекурсивной функции должно быть два случая: базовый и рекурсивный</li>
  <li>Стек поддерживает две операции: занесение и извлечение элементов</li>
  <li>Все вызовы функций сохраняются в стеке вызовов</li>
  <li>Если стек вызовов станет очень большим, он займет слишком много памяти</li>
</ul>

<hr>

<h3>Последовательно выводим ряд чисел</h3>
<p><?php countdown(12);?></p>

<h3>Факториал числа</h3>
<p><?php echo fact(7);?></p>

<h3>Последовательность Фибоначчи</h3>
<p><?php echo F(7);?></p>

<h3>Поиск максимального элемента в массиве</h3>



<?php require_once $root . '/template/shared/footer.php'; ?>