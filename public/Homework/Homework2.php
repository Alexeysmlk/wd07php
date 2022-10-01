<?php

// Задача 1.

echo "<strong>1. Изменить регистр строки на противоположный </strong> <br><br>";

// Указать исходную строчку
$text = "переделать строчку! второе предложение! третье предложение! вау!";

echo "Исходная строка: ".$text."<br>";

if ($text == mb_strtoupper($text)) {
    $newtext = mb_strtolower($text);
} else {
    $newtext = mb_strtoupper($text);
}
echo "Полученная строка: ".$newtext;

// Задача 2.

echo "<br><br>";
echo "<strong>2. Посчитать количество слов в строке</strong><br><br>";

$word_count = 0;
$array_stroke = explode('.', rtrim(str_replace(['!','?'],'.',$text), '.'));
foreach ($array_stroke as $key => $arr_str) {
    $arr_str = trim($arr_str);
    $sub_arr_str = explode(' ', $arr_str);
    $word_count += count($sub_arr_str);
}

echo "В предложении \"$text\" присутствует $word_count слов(а)";

// Задача 3.

echo "<br><br>";
echo "<strong>3. Получить первое слово каждого предложения</strong><br><br>";

echo "Первыми словами в следующих предложениях являются: <br>";


$array_stroke = explode('.', rtrim(str_replace(['!','?'],'.',$text), '.'));
foreach ($array_stroke as $key => $arr_str) {
    $arr_str = trim($arr_str);
    $sub_arr_str = explode(' ', $arr_str);
    $number = ++$key;
    echo "В предложении $number первое слово - ".$sub_arr_str[0]."<br>";
}

// Задача 4.

echo "<br>";
echo "<strong>4. Перевести строку в транслит</strong><br><br>";

echo "Исходная строка: \"$text\" <br>";

$russian = ['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я'];
$english = ['a','b','v','g','d','e','yo','j','z','i','y','k','l','m','n','o','p','r','c','t','y','f','h','c','ch','sh','sh','\'','y','\'','e','yu','ya'];

$translit = str_ireplace($russian, $english, $text);
echo "Полученная строка: \"$translit\"";