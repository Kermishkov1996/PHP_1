<div class="comment-view_wrapper">
    <?php 
    if ($comments) { 
      foreach ($comments as $single) : ?>
      <div class="comment_item">
        <div class="comment_item-name">
            <?= $single['name'] ?>
        </div>
        <div class="comment_item-date">
            <?= $single['Date'] ?>
        </div>
        <div class="comment_item-content">
            <?= $single['content'] ?>
        </div>
      </div>
    <?php endforeach; 
    } else { ?>
        <h5>Комментариев нет!</h5>
      <?php } ?>
</div>

<div class="comment_wrapper">
  <form action="" method="post">
    <div class="comment_name">
      <label for="name">Имя:</label>
      <input type="text" id="name" name="name" required>
    </div><br>
    <div class="comment_text-field">
      <label for="comment">Комментарий:</label>
      <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
    </div><br>
    <input type="submit">
  </form>
</div>