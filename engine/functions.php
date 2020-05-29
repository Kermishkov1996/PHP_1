<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/funcImgResize.php";

// Функция загрузки картинок
function uploadFiles() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['file'])) {
            foreach ($_FILES['file']['type'] as $key => $item) {
                $fileType = explode('/', $item)[0];
                $tmp = $_FILES['file']['tmp_name'][$key];
                $fileName = $_FILES['file']['name'][$key];
                //меняем имя мини-версии для удобства
                $fileNameSmall = sprintf('small-%s', $fileName);
                $fileSize = $_FILES['file']['size'][$key];
                //пути для копирования изображений
                $destImgSmall = $_SERVER['DOCUMENT_ROOT'] . "/public/img/small/" . $fileNameSmall;
                $destImgOriginal = $_SERVER['DOCUMENT_ROOT'] . "/public/img/original/" . $fileName;
                //проверка на длину имени файла, если более 25 символов, то обрезаем
                if (strlen($fileName) > 20) {
                    $fileName = mb_substr($fileName, 0, 25).'...';
                }
                //проверка на тип файла и размер
                if ($fileType == 'image' && $fileSize <= 10e6) {
                    //мини-версию размером 300*300 копируем в images/small
                    img_resize($tmp, $destImgSmall, 300, 300);
                    //оригинал перемещаем в images/original
                    move_uploaded_file($tmp, $destImgOriginal);
                    //формируем отчет об выполнении
                    $message['good'][] = $fileName;
                    //если проверка не пройдена, добавляем соответствующие сообщения
                } elseif ($fileType != 'image') {
                    $message['bad_type'][] = $fileName;
                } else {
                    $message['bad_size'][] = $fileName;
                }
            }
        }
    }
    return $message;
}

// Функция генерации ссылок для галереи картинок
function imgPathArray() {
    // Открываем дескриптор каталога
    $source = opendir($_SERVER['DOCUMENT_ROOT'] . "/public/img/small");
    $pathSmall = "../public/img/small/";
    $pathOrig = "../public/img/original/";
    // Возвращаем имя следующего по порядку элемента каталога
    while ($file = readdir($source)) {
        if ($file != '.' && $file != '..') {
            // Наполняем массив ссылками, где 0 элемент - ссылка на мини-картинку, 1 - на оригинальную
            $imgArray[] = [$pathSmall . $file, $pathOrig . ltrim($file, 'small-')];
        }
    }
    // Закрываем дескриптор каталога
    closedir($source);

    return $imgArray;
}