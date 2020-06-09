<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

$books = query("SELECT * FROM product", null, IMAGES_DB);
//считываем все категории из БД
$categories = query("SELECT * FROM category", null, IMAGES_DB);
$categoryId = $_GET['select'];

//если категория выбрана, то выбираем соответствующие товары
if ($categoryId) {
    $books = getCategories($categoryId);
    //var_dump($categoryId);
}

echo renderLayout('catalog.php', ['books' => $books, 'category' => $categories]);
