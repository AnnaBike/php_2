<?php

function getSymbolAfterLastSlash($url) {
  $parts = explode('/', $url);
  return end($parts);
}

//Пример
$url = 'http://akkodram.ru/razbory/1struna/adele-someone-like-you';
$result = getSymbolAfterLastSlash($url);
echo $result; // Вывод: adele-someone-like-you

?>