<?php

class Temperature {
    private $highTemps;

    public function __construct(array $highTemps) {
        $this->highTemps = $highTemps;
    }

    public function getAverageTemperature() {
        return number_format(array_sum($this->highTemps) / count($this->highTemps), 2);
    }

    public function getTopFiveHighTemperatures() {
        rsort($this->highTemps);
        return array_slice($this->highTemps, 0, 5);
    }

    public function getBottomFiveHighTemperatures() {
        sort($this->highTemps);
        return array_slice($this->highTemps, 0, 5);
    }
}

$highTemps = array(
    -3, 1, 0, 5, 6, 7, 8, -25, 15, 29, 39, -2, 12, 17, 25,
    -34, 40, 13, -8, -19, 3, 22, 11, -35, 41, -6, 14, 24, 4, -20
);

$temperature = new Temperature($highTemps);
echo "Средняя высокая температура: " . $temperature->getAverageTemperature() . "C";
echo "Пять самых теплых высоких температур: " . implode(", ", $temperature->getTopFiveHighTemperatures()) . "C,";
echo "Пять самых низких высоких температур: " . implode(", ", $temperature->getBottomFiveHighTemperatures()) . "C,";
?>

