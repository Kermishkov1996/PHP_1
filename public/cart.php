<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/render.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/users.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/public/login.php";

session_start();

//если есть логин, то
if (isset($_SESSION['login'])) {

    sessionTime($_SESSION['start_time'], 1200);

    $userName = $_SESSION['name'];

    //получаем информацию о добавленных книгах (сработал скрипт addToCart)
    if (isset($_SESSION['book']) && count($_SESSION['book']) > 0) {
        //делаем запрос к БД на информацию о книгах, добавленных в корзину
        $books = getBooks($_SESSION['book']);
    } else {
        $books[0][''] = 'Корзина пуста';
    }

    //удаляем товары из корзины (сессии)
    if ($_POST['clear_cart']) {
        unset($_SESSION['book']);
        header('Location: cart.php');
    }

    //заносим товары в базу
    //пока не готово
    if ($_POST['submit_cart']) {
        var_dump($_SESSION);
        //query("");
    }

    //рендерим только корзину, передаем массив книг, имя пользователя и дату последнего входа
    echo renderLayout(['cart.php'], ['userName' => $userName, 'books' => $books, 'message' => $message]);

    //если логина нет, и если имя есть, то логин
    // если нет, то форма логина с сообщением об ошибке
} else {
    if (isset($_SESSION['name'])) {
        $message = $_SESSION['name'] . ' , пожалуйста, войдите снова!';
    }
    echo renderLayout(['login.php'], ['message' => $message]);
}