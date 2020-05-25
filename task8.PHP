<?php

$region = [
			"Самарская область" => ["Самара", "Тольятти", "Сызрань"],
			"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
			"Ульяновская область" => ["Ульяновск", "Димитровград", "Инза", "Барыш", "Кузоватово"]
		  ];

function searchCity($symbol, $arr) {
    if (!is_array($arr) || !is_string($symbol)) {
        return print 'Неккоректно введены данные';
    }
    //счетчик неподходящих городов
    $incorrectCity = 0;
    //количество городов в массиве
    $cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
    foreach ($arr as $key => $value) {
        for ($i = 0; $i < count($arr[$key]); $i++) {
            //проверяем строку через регулярное выражение на кириллицу
            $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            //если первая буква совпадает с заданной, то выводим на экран
            if ($explodeArr[0] == $symbol) {
                echo implode($explodeArr) . '<br>';
            } else {
                $incorrectCity++;
                //если счетчик неподходящих городов равен количеству городов в массиве, то выводим сообщение
                if ($incorrectCity == $cityCount) {
                    return print "Города на букву '{$symbol}' в массиве нет.";
                }
            }
        }
    }
}

searchCity('К', $region);