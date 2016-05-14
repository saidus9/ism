<?php

$router->map('GET', '/', 'Acme\controllers\PageController@getShowHomePage', 'home');

$router->map('GET', '/register', 'Acme\controllers\RegisterController@getShowRegisterPage', 'register');

$router->map('POST', '/register', 'Acme\controllers\RegisterController@postShowRegisterPage', 'register_post');

$router->map('GET', '/login', 'Acme\controllers\RegisterController@getShowLoginPage', 'login');

$router->map('GET', '/about', 'Acme\controllers\PageController@getShowPage', 'generic_page');
