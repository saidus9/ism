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

  $transport = Swift_SmtpTransport::newInstance(getenv('SMTP_HOST'), getenv('SMTP_PORT'))
    ->setUsername(getenv('SMTP_USER'))
    ->setPassword(getenv('SMTP_PASS'));

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance()
      ->setSubject('Your subject')
      ->setFrom(array('john@doe.com' => 'John Doe'))
      ->setTo(array('receiver@domain.org'))
      ->setBody('Here is the message itself');

      $result = $mailer->send($message);

      echo "Sent Mail!";
});

// Page Routes
$router->map('GET', '/', 'Acme\controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/page-not-found', 'Acme\controllers\PageController@getShow404', '404');
$router->map('GET', '/[*]', 'Acme\controllers\PageController@getShowPage', 'generic_page');
