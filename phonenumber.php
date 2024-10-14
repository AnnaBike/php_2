<?php

function cleanPhoneNumber($phoneNumber) {
  // Удаляем пробелы, скобки и дефисы
  $cleanedNumber = str_replace([' ', '(', ')', '-', '+'], '', $phoneNumber);

  // Проверяем, начинается ли номер с 7
  if (substr($cleanedNumber, 0, 1) === '7') {
    return $cleanedNumber;
  } else {
    return '7' . $cleanedNumber; // Добавляем 7, если его нет
  }
}

  //Пример
$phoneNumber = "+7 (900) 000-00-00";
$cleanedPhoneNumber = cleanPhoneNumber($phoneNumber);

echo $cleanedPhoneNumber; // Вывод: 79000000000

?>