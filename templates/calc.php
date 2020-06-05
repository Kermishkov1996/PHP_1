<div class="wrap">
<h5>GET</h5>
<form action="">
  <label for="digit1">Число 1</label>
  <input type="text" id="digit1" name="digit1"><br>
  <select name="action">
    <option value="+">Сумма (+)</option>
    <option value="-">Разность (-)</option>
    <option value="x">Умножение (*)</option>
    <option value="/">Деление (/)</option>
  </select><br>
  <label for="digit2">Число 2</label>
  <input type="text" id="digit2" name="digit2">
    <input type="submit" value="Вычислить">
    <br>
</form>
<h5>POST</h5>
<form action="" method="post">
    <label for="digit1_1">Число 1</label>
    <input type="text" id="digit1_1" name="digit1"><br>
    <div id="action">
      <input type="submit" name="action" value="+">
      <input type="submit" name="action" value="-">
      <input type="submit" name="action" value="x">
      <input type="submit" name="action" value="/">
    </div>
    <label for="digit2_2">Число 2</label>
    <input type="text" id="digit2_2" name="digit2">
</form>
<br>
<h3>Результат: <?= $result ?></h3>
</div>