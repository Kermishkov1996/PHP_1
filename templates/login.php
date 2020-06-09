<h3>Войти</h3>
<form action="" method="post">
  <label for="login">Логин</label>
  <input type="text" id="login" name="login">
  <label for="password">Пароль</label>
  <input type="password" id="password" name="password">
  <input type="submit" value="Войти">
</form>
  <br>
<form action="registration.php" method="post">
  <input type="submit" value="Регистрация" name="reg">
</form>
<div><?= $message ?></div>
