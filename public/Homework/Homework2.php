<?php

echo "Задение 1. Изменить регистр строки на противоположный <br><br>";

// Указать исходную строчку
$text = "alex alex alex alex";

$abc = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$bool = false;

echo "Исходная строка: ".$text."<br>";

foreach ($abc as $value) {
    if (strpos($text,$value) !== false) {
        $bool=true;
        break;
    }
}
echo "Строка после преобразования: ";
if ($bool) {
    echo strtolower($text);
} else {
    echo strtoupper($text);
}
