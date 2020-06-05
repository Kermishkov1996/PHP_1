<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

$id = $_GET['id'];

$book = getBooks($id);

echo renderLayout('book.php', ['book' => $book]);
