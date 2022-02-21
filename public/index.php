<?php

spl_autoload_register(function($class){
    $class = str_replace('App\\', '', $class);
    require __DIR__ . '/../src/' . $class . '.php';
});

switch($_SERVER['REQUEST_URI']){
    case '/':
        include __DIR__ . '/../views/home.php';
        break;
    case '/about':
        include __DIR__ . '/../views/about.php';
        break;
    default:
        echo "404 page not found!";
        break;
}

use App\Animal;
use App\Pets\Nuustik as Nupsu;

$animal1 = new Animal("Nuustik", 4);
var_dump($animal1);
$animal2 = new Animal("Muki", 3);
var_dump($animal2);
$animal1->sayName();
$animal2->sayName();

$nuustik = new Nupsu();