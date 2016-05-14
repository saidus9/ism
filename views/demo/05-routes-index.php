<?php

session_start();

require( __DIR__ . "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$url = explode('/', $_SERVER['REQUEST_URI']);


if ($url[1] == "") {
  // Display the home page
  include(__DIR__ . "/../views/home.php");
  exit();
} elseif ($url[1] == "register") {
  // Display the register page
  include(__DIR__ . "/../views/register.php");
  exit();
} elseif ($url[1] == "login") {
  // Display the login page
  include(__DIR__ . "/../views/login.html");
  exit();
}
