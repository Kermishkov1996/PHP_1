<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";
?>

<!-- Структура генерации галереи -->
<div class="gallery">
  <h3>Галерея</h3>
  <div class="gallery_pictures">
      <?php if (imgPathArray()) {
          foreach (imgPathArray() as $key => $image) { ?>
            <!-- Второй элемент массива - оригинал изображения -->
            <a href="<?= $image[1] ?>" target="_blank">
              <!-- Первый элемент массива - уменьшенное изображение -->
              <img src="<?= $image[0] ?>" alt="image" width="300" height="169">
            </a>
          <?php }
      } ?>
  </div>
</div>
