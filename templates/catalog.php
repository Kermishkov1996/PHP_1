<h2>Каталог</h2>
<form action="">
  <select name="select" id="">
      <?php foreach ($category as $value) : ?>
        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
      <?php endforeach; ?>
  </select>
  <input type="submit" value="Выбрать">
</form>
<?php //var_dump($category); ?>

<div class="catalog">
    <?php foreach ($books as $key): ?>
      <div class="catalogGood">
        <a href="book.php?id=<?= $key['id'] ?>">
          <img src="<?= $key['picture_small_url'] ?>" alt="small picture" class="imgCatalog">
            
          <br>
          <span class="descriptionLink"><?= $key['title'] ?>
            <br>
            <i><?= $key['author: '] ?></i>
          </span>
        </a>
      </div>
    <?php endforeach;
          var_dump($books); ?>
</div>