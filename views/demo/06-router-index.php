<?php

session_start();

require( __DIR__ . "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();

$router->map('GET', '/', function() {
  include(__DIR__ . "/../views/home.php");
});

$router->map('GET', '/register', function() {
  include(__DIR__ . "/../views/register.php");
});

$router->map('POST', '/register', function() {
  include(__DIR__ . "/../views/doRegister.php");
});

$router->map('GET', '/login', function() {
  include(__DIR__ . "/../views/login.php");
});


$match = $router->match();

if ($match && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
}else {
  // No matching route fann_num_output_train_data
  header($_SERVER['SERVER_PROTOCOL'] . ' 404 NOT FOUND ');
}
