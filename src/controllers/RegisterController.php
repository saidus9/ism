<?php
namespace Acme\Controllers;

use Acme\Models\user;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
  {

    public function getShowRegisterPage()
    {
        // include(__DIR__ . "/../../views/register.html");
        // echo $this->twig->render('register.html');
        echo $this->blade->render("register");
    }

    public function postShowRegisterPage()
    {
        $validation_data = [
      'first_name' => 'min:3',
      'last_name' => 'min:3',
      'email' => 'email|equalTo:verify_email',
      'password' => 'min:3|equalTo:verify_password',
    ];
    // Validate data
    $validator = new Validator;

    $errors = $validator->isValid($validation_data);


    // If validation fails - go back to register and display error.

    if (sizeof($errors) > 0)
    {
      $_SESSION['msg'] = $errors;
      echo $this->blade->render('register');
      unset($_SESSION['msg']);
      exit();
    }

    // Save into database
    $user = new User;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();
        echo "Posted!";
    }


    public function getShowLoginPage()
    {
        // include(__DIR__ . "/../../views/login.html");
        // echo $this->twig->render('login.html');
        echo $this->blade->render("login");
    }

}
