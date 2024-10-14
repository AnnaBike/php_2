<?php
$highTemps = array(
    68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 
    73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 
    68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);

// Вычисление средней температуры
$averageTemp = array_sum($highTemps) / count($highTemps);

// Сортировка температур для нахождения самых теплых и холодных
sort($highTemps);
$lowestTemps = array_slice($highTemps, 0, 5); // пять самых низких температур
$highestTemps = array_slice($highTemps, -5); // пять самых высоких температур

// Вывод результатов в браузере
echo "Средняя высокая температура: " . round($averageTemp, 2) . " °F<br>";
echo "Пять самых низких высоких температур: " . implode(", ", $lowestTemps) . " °F<br>";
echo "Пять самых теплых высоких температур: " . implode(", ", $highestTemps) . " °F<br>";
?>