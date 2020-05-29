<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";
?>

<div class="upload_form_wrapper">
  <div class="upload_form">
    <h5>Добавь картинку в галерею</h5>
    <form action="" enctype="multipart/form-data" method="post">
      <input type="file" name="file[]" multiple>
      <input type="submit" style="cursor: pointer;">
      <!-- Формируем список сообщений для каждого файла -->
        <?php if (uploadFiles()) { ?>
          <ul>
              <?php foreach (uploadFiles() as $key => $value) {
                  for ($i = 0; $i <= count($value) - 1; $i++) {
                      if ($key == 'good') { ?>
                        <li><span class='upload_form__good'> <?= $value[$i] ?></span> Добавлен! </li>
                      <?php } elseif ($key == 'bad_type') { ?>
                        <li><span class='upload_form__bad'> <?= $value[$i] ?> </span> Неподходящий формат файла! </li>
                      <?php } else { ?>
                        <li><span class='upload_form__bad'> <?= $value[$i] ?></span> Размер файла больше, чем 10Mb! </li>
                          <?php
                      }
                  }
              } ?>
          </ul>
        <?php }  ?>
    </form>
  </div>
</div>

<?php
var_dump(uploadFiles());
?>
