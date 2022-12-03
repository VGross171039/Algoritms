<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<h3>Array_splice</h3>
<?php 

$input = [1, 3, 5, 7, 11, 17];

array_splice($input, 2);  // Удаляет все элементы массива после первых двух
print_arr($input);  // Массив сократился до первых двух элементов

$input = [1, 3, 5, 7, 11, 17];  // Восстанавливаем исходный массив

array_splice($input, -2);  // Удаляет два последних элемента массива
print_arr($input);

$input = [1, 3, 5, 7, 11, 17];

array_splice($input, 2, -1);  // Оставляет два первых и один последний элементы массива
print_arr($input);


?>

<?php require_once $root . '/template/shared/footer.php'; ?>