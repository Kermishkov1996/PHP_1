<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/engine/render.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/users.php";

if ($_POST['new_registration']) {
    $newUser = $_POST;
    if (regUser($newUser)) {
        $message = 'User successfully create!';
    } else {
        $message = 'This login is already exist!';
    }
}

echo renderLayout('registration.php', ['message' => $message]);
