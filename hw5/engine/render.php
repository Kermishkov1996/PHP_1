<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/hw5/engine/db.php";

// Отображает на главном экране содержимое галереи
function renderLayout($template, $params = [], $useLayout = true) {
    $content = renderTemplate($template, $params);
    if ($useLayout) {
        $content = renderTemplate('layouts/mainLayout.php', ['content' => $content]);
    }
    return $content;
}

// Возвращает кол-во картинок и очищает буфер
function renderTemplate($template, $params = []) {
    ob_start();
    extract($params);
    include $_SERVER['DOCUMENT_ROOT'] . "/hw5/templates/{$template}";
    return ob_get_clean();
}
