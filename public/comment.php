<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    query("INSERT INTO comments (name, comment, picture_id) VALUES ('$name', '$comment', '$id')");
}

$comments = getComments($id);