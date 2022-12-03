<?php 

if ($_SERVER["REQUEST_URI"] == '/') :
  $title = 'Главная';
endif;

$chapter = '';
if (preg_match("/viewbook/i", $url)) :
  $chapter = 'Books' . '<span>|</span>';
elseif(preg_match("/viewacademy/i", $url)):
  $chapter = 'Academy' . '<span>|</span>';
endif;

if (preg_match("/binarysearch/i", $url)):
  $title = 'Бинарный поиск';
elseif (preg_match("/sortchoice/i", $url)):
  $title = 'Сортировка выбором';
elseif (preg_match("/recursion/i", $url)):
  $title = 'Рекурсия';
elseif (preg_match("/quicksort/i", $url)):
  $title = 'Быстрая сортировка';
elseif (preg_match("/hashtables/i", $url)):
  $title = 'Хеш таблицы';
elseif (preg_match("/search-width/i", $url)):
  $title = 'Поиск в ширину';
elseif (preg_match("/deycstras/i", $url)):
  $title = 'Алгоритм Дейкстры';
elseif (preg_match("/greedyalg/i", $url)):
  $title = 'Жадные алгоритмы';
elseif (preg_match("/dynamics/i", $url)):
  $titlet = 'Динамическое программирование';
elseif (preg_match("/k-algorithm/i", $url)):
  $title = 'Алгоритм k';
elseif (preg_match("/addnext/i", $url)):
  $title = 'Что дальше';
endif;
?>

<?php if ($url == '/viewacademy/intro/' or $url == '/viewacademy/intro/tasks/'){
  $title = 'Введение';
} elseif ($url == '/viewacademy/linearsearch/' or $url == '/viewacademy/linearsearch/tasks/'){
  $title = 'Линейный поиск';
} elseif ($url == '/viewacademy/sets/' or $url == '/viewacademy/sets/tasks/'){
  $title = 'Множества';
} elseif ($url == '/viewacademy/sortcounting/' or $url == '/viewacademy/sortcounting/tasks/'){
  $title = 'Словари и сортировка подсчётом';
} elseif ($url == '/viewacademy/prefixsums/' or $url == '/viewacademy/prefixsums/tasks/'){
  $title = 'Префиксные суммы и два указателя';
} elseif ($url == '/viewacademy/binarysearch/' or $url == '/viewacademy/binarysearch/tasks/'){
  $title = 'Бинарный поиск';
} elseif ($url == '/viewacademy/sortingevents/' or $url == '/viewacademy/sortingevents/tasks/'){
  $title = 'Сортировка событий';
} elseif ($url == '/viewacademy/trees/' or $url == '/viewacademy/trees/tasks/'){
  $title = 'Деревья';
} ?>