<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/hw5/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/hw5/engine/upload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/hw5/engine/db.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$image = query("SELECT * FROM image_data WHERE id = $id", 'one');

query("UPDATE image_data SET views = views + 1 WHERE id = $id");

echo renderLayout('image.php', ['image' => $image]);