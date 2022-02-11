<?php

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