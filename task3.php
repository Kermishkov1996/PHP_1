<?php

$region = [
			"Самарская область" => ["Самара", "Тольятти", "Сызрань"],
			"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
			"Ульяновская область" => ["Ульяновск", "Димитровград", "Инза", "Барыш"]
		  ];

function showCity($mas) {
	if (!is_array($mas)) {
		return print "Неккоректно введен массив '{$mas}'";
	}
	foreach ($mas as $oblast => $city) {
		echo $oblast . ':<br>';
		for ($i = 0; $i < $masLength = count($mas[$oblast]); $i++) { 
			if ($i == $masLength - 1) {
				echo $mas[$oblast][$i] . '.<br><hr>';
			}
			else {
				echo $mas[$oblast][$i] . ', ';
			}
		}
	}
}

showCity($region);