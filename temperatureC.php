// Задание 1 (градус Цельсия)

<?php
$highTemps = array(
    2, 5, 10, 8, 15, 18, 20, -1, 0, 3,
    -15, 25, 30, 13, 4, -28, 36, 1, 9, 19,
    -5, 7, -11, 39, 12, 6, 22, 40, -30, 26
);

// Вычисление средней температуры
$averageTemp = array_sum($highTemps) / count($highTemps);

// Сортировка температур для нахождения самых теплых и холодных
sort($highTemps);
$lowestTemps = array_slice($highTemps, 0, 5); // пять самых низких температур
$highestTemps = array_slice($highTemps, -5); // пять самых высоких температур

// Вывод результатов в браузере
echo "Средняя высокая температура: " . round($averageTemp, 2) . " °C<br>";
echo "Пять самых низких высоких температур: " . implode(", ", $lowestTemps) . " °C<br>";
echo "Пять самых теплых высоких температур: " . implode(", ", $highestTemps) . " °C<br>";
?>