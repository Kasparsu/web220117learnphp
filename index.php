<?php

$array = [1,2,3];
array_push($array, 4);
var_dump($array);
$array[] = 5;
var_dump($array);
var_dump($array[2]);
$array = [
    "name" => "Kaspar",
    "age" => 28,
    "isMale" => true
];
var_dump($array);
var_dump($array["name"]);

echo "hello " . "world";
$age = 28;
echo "Hi I am $age";
echo 'Hi I am $age';
echo $array; 