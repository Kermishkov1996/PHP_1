<?php
header('Content-type: text/html; charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/db.php";

// Отображает на главном экране содержимое контента
function renderLayout($template, $params = [], $useLayout = true) {
    $content = renderTemplate($template, $params);
    if ($useLayout) {
        $content = renderTemplate('layouts/mainLayout.php', ['content' => $content]);
    }
    return $content;
}

// Перебирает контенты для дальнейшего вывода на главный экран
function renderTemplate($template, $params = []) {
    ob_start();
    extract($params);
    if (is_array($template)) {
        foreach ($template as $value) {
            include $_SERVER['DOCUMENT_ROOT'] . "/templates/{$value}";
        }
    } else {
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/{$template}";
    }
    return ob_get_clean();
}
