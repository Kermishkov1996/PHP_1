<?php
header('Content-type: text/html; charset=utf-8');
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/render.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/upload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

echo renderLayout('index.php');