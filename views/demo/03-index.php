<?php
$true = false;
if ($true == true) {
$title = "This is my title";
$body = "This is the body text";
} else {
  $title = "This is title when true is false";
  $body = "This is the body when true is false";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Title</title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $body; ?></p>
  </body>
</html>
