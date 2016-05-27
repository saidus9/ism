<?php
namespace Acme\Controllers;

use Acme\Models\user;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;
use Acme\Email\SendEmail;
use Acme\models\UserPending;

class RegisterController extends BaseController
  {

    public function getShowRegisterPage()
    {
        echo $this->blade->render("register");
    }

    public function postShowRegisterPage()
    {
        $validation_data = [
      'first_name' => 'min:3',
      'last_name' => 'min:3',
      'email' => 'email|equalTo:verify_email|unique:User',
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

        $token = md5(uniqid(rand(), true)) . md5(uniqid(rand(), true));
        $user_pending = new UserPending;
        $user_pending->token = $token;
        $user_pending->user_id = $user->id;
        $user_pending->save();

        $message = $this->blade->render('emails.welcome-email',
          ['token' => $token]
      );
        SendEmail::sendEmail($user->email, "Welcome to ISM", $message);

        // Success page is stored in database
        header("Location: /success");
        exit();
    }

    public function getVerifyAccount()
    {
        $user_id = 0;
        $token = $_GET['token'];

        // Lookup the token
        $user_pending = UserPending::where('token', '=', $token)->get();

        foreach ($user_pending as $item) {
          $user_id = $item->user_id;
        }

        if($user_id > 0) {
          // Make the user account active
          $user = User::find($user_id);
          $user->active = 1;
          $user->save();

          UserPending::where('token', '=', $token)->delete();

          header("Location: /account-activated");
          exit();
        } else {
          header("Location: /page-not-found");
          exit();
        }
    }

}
