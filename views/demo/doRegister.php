<?php
session_start();

// initialize variables
$okay = true;

$first_name = "";
$last_name = "";
$email = "";
$verify_email = "";
$password = "";
$verify_password = "";

// get posted form data
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$verify_email = $_REQUEST['verify_email'];
$password = $_REQUEST['password'];
$verify_password = $_REQUEST['verify_password'];

// ensure that all fields are entered
if (($first_name == "")
  || ($last_name == "")
  || ($email == "")
  || ($verify_email == "")
  || ($verify_password == "")
  || ($last_name == "")) {
    $okay = false;
  }

// first name must be >= 3 characters
if (strlen($first_name) < 3){
  $okay = false;
}

// last name must be >= 3 characters
if (strlen($last_name) < 3){
  $okay = false;
}

// username must match verify username
if ($email != $verify_email) {
  $okay = false;
}

// password must match verify password
if ($password != $verify_password) {
  $okay = false;
}

if ($okay == false) {
  $msg = "You missed some form fields, please re-enter and try again.";
  $_SESSION['msg'] = $msg;
  header("Location: /register.php");
  exit();
}

// write all values to scree
echo "First name: " . $first_name . "<br>";
echo "Last name: " . $last_name . "<br>";
echo "Email: " . $email . "<br>";
echo "Verify Email: " . $verify_email . "<br>";
echo "Password: " . $password . "<br>";
echo "Verify Password: " . $verify_password . "<br>";

echo "<br><br>";

foreach ($_REQUEST as $name => $value) {
  echo $name . " = " . $value . "<br>";
}
