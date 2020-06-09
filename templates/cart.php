<h5>Привет, <?= $userName; //var_dump($userName); ?>!</h5>
<div><?= $message ?></div>
<form action="" method="post" name="logoutform">
  <input type="submit" value="Выйти" name="logout">
</form>
<div>Ваша корзина заказов:</div>
<div class="cart_orders">
    <?php foreach ($books as $book) : ?>
      <div class="order_item">
        <ul>
            <?php foreach ($book as $key => $value) : ?>
              <li><b><?= $key?></b><?=$value ?></li>
            <?php endforeach; ?>
        </ul>
        <form action="deleteItem.php" method="post">
          <input type="submit" name="<?= $book['id'] ?>" value="Удалить заказ">
        </form>
      </div>
    <?php endforeach; //var_dump($_SESSION) ?>
</div>
<form action="" method="post">
  <input type="submit" name="clear_cart" id="clear_cart" value="Очистить корзину">
  <input type="submit" name="submit_cart" id="submit_cart" value="Сохранить корзину">
</form>
