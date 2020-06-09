<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

$id = $_GET['id'];
var_dump($id);
$book = getBooks($id);
var_dump($book);
echo renderLayout('book.php', ['book' => $book]);
