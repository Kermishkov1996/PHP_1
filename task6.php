<?php

$menuArr = [
    		'Пункт 1',
    		'Пункт 2' => ['Подпункт 1',
    					  'Подпункт 2',
    					  'Подпункт 3' => [
    										'Текст подпункта 3'
    									  ]
    					 ],
    		'Пункт 3' => ['Подпункт 4' => [
    										'Текст подпункта 4',
    										'Текст подпункта 4'
    									  ]
    					 ]
		   ];

function menuRender($arr) {

    if (!is_array($arr)) {
        return print "Неккоректно введен массив '{$arr}'";
    }

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        //перебираем массив, если значение - это массив, то обрабатываем его функцией menuRender
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}
echo menuRender($menuArr);