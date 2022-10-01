<?php

// Задача 1.

echo "<strong>1. Изменить регистр строки на противоположный </strong> <br><br>";

// Указать исходную строчку
$text = "first sentence. second sentence. third sentence. fourth sentence";

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

// Задача 2.

echo "<br><br>";
echo "<strong>2. Посчитать количество слов в строке</strong><br><br>";

$count_word = str_word_count($text);
echo "В предложении \"$text\" присутствует $count_word слов(а)";

// Задача 3.

echo "<br><br>";
echo "<strong>3. Получить первое слово каждого предложения</strong><br><br>";

echo "Первыми словами в следующих предложениях являются: <br>";

$array_stroke = explode('.', $text);
foreach ($array_stroke as $key => $arr_str) {
    $arr_str = trim($arr_str);
    $sub_arr_str = explode(' ', $arr_str);
    $number = ++$key;
    echo "В предложении $number первое слово - ".$sub_arr_str[0]."<br>";
}