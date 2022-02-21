<?php

use App\Controllers\HomeController;

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../helpers.php';

$router = new AltoRouter();

$router->map('GET', '/', [HomeController::class, 'index']);
$router->map('POST', '/', [HomeController::class, 'index']);


$router->map('GET', '/about', [HomeController::class, 'about']);

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 

} else if(is_array($match) && is_array($match['target'])) {
    $class = $match['target'][0];
    $method = $match['target'][1];
    $controller = new $class();
    $controller->$method();
}  else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}