<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/upload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$image = query("SELECT * FROM image_data WHERE id = $id", 'one');

query("UPDATE image_data SET views = views + 1 WHERE id = $id");

include $_SERVER['DOCUMENT_ROOT'] . "/public/comment.php";

echo renderLayout(['image.php', 'comment.php'], ['image' => $image, 'comments' => $comments]);