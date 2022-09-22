<?php
    $arr = [
        ["PHP", "Laravel"],
        ["HTML", "CSS"],
        ["Mysql", "PostreSql"],
        ["Nginx", "Apache"]
    ];

    echo $arr[1][1];
    echo "</br>";

    $arr1 = [
        "backend" => ["PHP", "Laravel"],
        "frontend" => ["HTML", "CSS"],
        "databeses" => ["Mysql", "PostreSQL"],
        "web-servers" => ["Nginx", "Apche"]
    ];

    echo $arr1['web-servers'][1];
    echo "</br>";

    $cicle = 1;

    while ($cicle < 5) {
        echo "Твоё число $cicle";
        echo "</br>";
        ++$cicle;
    }

    echo "<br>";

    $students = [
        "key1" => "Alexey",
        "key2" => "Victor",
        "key3" => "Alisa",
        "key4" => "Nasty"
    ];

    foreach ($students as $key => $value) {
        echo "Ключ $key > $value <br>";
    }

    echo "<br>";
    echo "<strong>Задача про while</strong><br/>";
    echo "Выести на экран диапозон чисел от 1 до 100 <br/>
        Из указанного диапазона выводить только ЧЕТНЫЕ числа <br/>
        И НЕ выводить числа, которые делятся на 3 без остатка <br/><br/>";

    $i = 1;

    while ($i<=100) {
        if ($i%2==0 && $i%3!=0) {
            echo "$i ";
        }
        $i++;
    }

    echo "<br><br/>";
    echo "<strong>Задача про foreach</strong><br/>";
    echo " При помощи цикла foreach вывести элементы массива на экран<br/>
        Не выводить на элементы, у которых ключ(индекс) четный<br/>
        Не выводить элемент, если он без остатка делится на 5<br/>
        После каждого вывода элемента на экран, вывести пробел<br/><br/>";

    $data = [1, 10, 11, 3, 2 ,5, 17, 22, 20];

    foreach ($data as $key => $value) {
        if ($key%2!=0 && $value%5!=0) {
            echo "$value ";
        }
    }

    echo "<br><br/>";
    echo "<strong>Задача про for</strong><br/>";
    echo " Создать пустой массив result<br/>
        Написать цикл for, который выполняет 15 итераций (i от нуля до 14)<br/>
        В массив result поместить квадраты числа i <br/>
        ЭЛЕМЕНТЫ МАССИВА НА ЭКРАН ВЫВОДИТЬ НЕ НУЖНО<br/><br/>";

    $result = [];

    for ($i=0; $i<=14; $i++) {
        $result[$i]=$i*$i;
    }

    echo 'Я ему \'привет\' сказал ';

    $name = "Alex";
    switch ($name) {
        case 'David':
            echo "Hello, David";
            break;
        case 'ALex':
            echo "Hello, Alex";
            break;
        case 'Kate':
            echo "Hello, Kate";
            break;
        default:
            echo "I dont know you!";
    }