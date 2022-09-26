<?php
    $text = 'Welcome my dear friends';

    echo "Функция strlen<br>";
    echo strlen($text);
    echo "<br>______________<br>";

    echo "Функция str_word_count<br>";
    echo str_word_count($text);
    echo "<br>______________<br>";

    echo "Функция strrev<br>";
    echo strrev($text);
    echo "<br>______________<br>";

    echo "Функция strpos<br>";
    echo strpos($text, 'dear');
    echo "<br>______________<br>";

    echo "Функция str_replace<br>";
    echo str_replace('my','your',$text);
    echo "<br>______________<br>";

    echo "Функция strtolower<br>";
    echo strtolower($text);
    echo "<br>______________<br>";

    echo "Функция strtoupper<br>";
    echo strtoupper($text);
    echo "<br>______________<br><br><br><br>";


    echo strtoupper("function substr");
    echo "<br><br>";
    echo substr($text, 8);
    echo "<br><br>";
    echo substr($text, -8);
    echo "<br><br>";
    $text1 = "alex alex apex alex";
    echo strpos($text1, 'alex');
    echo "<br><br>";
    echo strrpos($text1, 'alex');


