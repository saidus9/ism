<?php
// Register Routes
$router->map('GET', '/register', 'Acme\controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/register', 'Acme\controllers\RegisterController@postShowRegisterPage', 'register_post');

// Login/Logout Routes
$router->map('GET', '/login', 'Acme\controllers\AuthenticationController@getShowLoginPage', 'login');
$router->map('POST', '/login', 'Acme\controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('GET', '/logout', 'Acme\controllers\AuthenticationController@getLogout', 'logout');

$router->map('GET', '/testuser', 'Acme\controllers\AuthenticationController@getTestUser', 'testuser');

$router->map('GET', '/testemail', function(){

  Acme\Email\SendEmail::sendEmail('john@here.ca', 'My test subject', 'My message body');

  echo "Sent mail!";

});

// Page Routes
$router->map('GET', '/', 'Acme\controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/page-not-found', 'Acme\controllers\PageController@getShow404', '404');
$router->map('GET', '/[*]', 'Acme\controllers\PageController@getShowPage', 'generic_page');
