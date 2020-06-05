<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/style.css">
  <title>PHP</title>
</head>
<body>

<div class="content_wrapper">
  <header>
    <div class="logo"></div>
    <ul class="menu">
      <li><a href="index.php">Главная</a></li>
      <li><a href="gallery.php">Галерея</a></li>
      <li><a href="calc.php">Калькулятор</a></li>
      <li><a href="catalog.php">Каталог</a></li>
      <!-- <li><a href="cart.php">Cart</a></li> -->
    </ul>
  </header>
  <div class="content"><?= $content ?></div>
  <footer>
    Kermishkov Alexandr
    &copy; <?= date('Y') ?>
  </footer>
</div>

</body>
</html>