<?php
include_once __DIR__."/../vendor/autoload.php";

// Exercise 1.
use App\Classes\Exe1\Worker;
use App\Classes\Exe2andExe3\Worker as WorkerEx2;
use App\Classes\Exe4\Worker as WorkerEx4;
use App\Classes\Exe5andExe6\Worker as WorkerEx5;

$workerEx1 = new Worker;
$workerEx1->name = 'Иван';
$workerEx1->age = 25;
$workerEx1->salary = 1000;

$worker2Ex1 = new Worker;
$worker2Ex1->name = 'Вася';
$worker2Ex1->age = 26;
$worker2Ex1->salary = 2000;

echo $workerEx1->salary + $worker2Ex1->salary;
echo "<br>";
echo $workerEx1->age + $worker2Ex1->age;
echo "<br><br><br>";

// Exercise 2 and 3.

$workerEx2 = new WorkerEx2();
$workerEx2->setName('Иван');
$workerEx2->setAge(25);
$workerEx2->setSalary(1000);

$worker2Ex2 = new WorkerEx2();
$worker2Ex2->setName('Вася');
$worker2Ex2->setAge(26);
$worker2Ex2->setSalary(2000);

echo $workerEx2->getSalary() + $worker2Ex2->getSalary();
echo "<br>";
echo $workerEx2->getAge() + $worker2Ex2->getAge();
echo "<br><br><br>";

// Exercise 4.

$workerEx4 = new WorkerEx4('Дима', 1000);
$workerEx4->age = 25;
echo $workerEx4->age * $workerEx4->getSalary();
echo "<br><br><br>";

// Exercise 5.
$workerEx5 = new WorkerEx5;
$workerEx5->setName('Иван');
$workerEx5->setAge(25);
$workerEx5->setSalary(1000);

$worker2Ex5 = new WorkerEx5;
$worker2Ex5->setName('Вася');
$worker2Ex5->setAge(26);
$worker2Ex5->setSalary(2000);

echo $workerEx5->getSalary() + $worker2Ex5->getSalary();
echo "<br><br><br>";
