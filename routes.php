<?php

$router->map('GET', '/', 'Acme\controllers\PageController@getShowHomePage', 'home');

$router->map('GET', '/register', 'Acme\controllers\RegisterController@getShowRegisterPage', 'register');

$router->map('POST', '/register', 'Acme\controllers\RegisterController@postShowRegisterPage', 'register_post');

$router->map('GET', '/login', 'Acme\controllers\RegisterController@getShowLoginPage', 'login');

$router->map('GET', '/page-not-found', 'Acme\controllers\PageController@getShow404', '404');

$router->map('GET', '/slug', function() {
  $slug = new Cocur\Slugify\Slugify();
  echo $slug->slugify('About-ISM');
});

$router->map('GET', '/[*]', 'Acme\controllers\PageController@getShowPage', 'generic_page');
