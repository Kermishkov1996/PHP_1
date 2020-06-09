<?php
header('Content-type: text/html; charset=utf-8');
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/upload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

//Загружаем файлы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadImages();
}

$files = getGallery();

echo renderLayout('gallery.php', ['images' => $files]);
