<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/hw5/engine/render.php';

function query($queryArg, $number = null) {
    //если массив, то вносим значения в БД
    if (is_array($queryArg)) {

        ///преобразуем массив в переменные
        extract($queryArg);

        //проверяем, есть ли уже такое значение в БД
        $result = mysqli_fetch_all(executeQuery("SELECT * FROM image_data WHERE name = '$name'"));
        //если нет, передаем его в БД
        if (!$result) {
            executeQuery("INSERT INTO image_data (name, url, size, url_mini, size_mini) VALUES ('$name', '$url', $size, '$urlMini', $sizeMini)");
        }
        //если строка, то делаем запрос
    } elseif (is_string($queryArg)) {
        //запрос на чтение
        if (substr($queryArg, 0, 6) == 'SELECT') {
            $result = $number == 'one' ?
                mysqli_fetch_all(executeQuery($queryArg), MYSQLI_ASSOC)[0] :
                mysqli_fetch_all(executeQuery($queryArg), MYSQLI_ASSOC);
            //если результат выборки корректный, то создаем массив с информацией об image ID
            return $result;
        } else {
            executeQuery($queryArg);
        }
    }
}

// Выполняем запрос
function executeQuery($query) {
    return mysqli_query(getConnection(), $query);
}

// Подключаем базу данных
function getConnection() {
    define('IMAGES_DB', 'images');
    define('SERVER', 'localhost');
    define('LOGIN', 'root');
    define('PASS', '');

    static $con = null;

    if (!$con) {
        $con = mysqli_connect(SERVER, LOGIN, PASS, IMAGES_DB)  or die("Ошибка соединения с базой данных");
    }

    return $con;
    //mysqli_close($con);
}

// Сортируем просмотры по убыванию
function getGallery() {
    return query("SELECT * FROM image_data ORDER BY views DESC");
}