<?php error_reporting(-1); ?>
<?php require_once $root . '/template/init.php'; ?>
<?header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/mygrid.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Алгоритмы | <?php echo $title; ?></title>
</head>

<body>

  <div class="page-wrap">
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-50">
            <h1><a href="/">PHP Алгоритмы</a></h1>
            <div class="title-wrap">
              <p><?php echo $chapter;?><?php echo $title;?></p>
            </div>
          </div>
          <div class="col-50"></div>
        </div>
      </div>
    </header>
    <div class="content-wrap">
      <div class="container">
        <div class="row">

          <?php if ($_SERVER["REQUEST_URI"] != '/') :?>
          <div class="col-100">
            <?php if (preg_match("/sample/i", $url) or preg_match("/tasks/i", $url)) :?>
            <div class="testcode-wrap"></div>
            <?php else:?>
            <div class="testcode-wrap">
              <a href="sample/">Образец</a><span>|</span><a href="tasks/">Упражнения</a>
            </div>
            <?php endif;?>
            <?php endif;?>