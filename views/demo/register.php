<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ISM</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="row">

        <div class="col-md-2">

        </div>

        <div class="col-md-8">
          <h1>Register</h1>

          <?php
            if (isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>

          <hr>

          <form id="registerform" name="registerform" class="form-horizontal" action="doRegister.php" method="post">

            <div class="form-group">
              <label for="first_name" class="col-sm-2 control-label">First Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control required" name="first_name" id="first_name" placeholder="Enter First Name">
              </div>
            </div>

            <div class="form-group">
              <label for="last_name" class="col-sm-2 control-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control required" name="last_name" id="last_name" placeholder="Last Name">
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control required email" name="email" id="email" placeholder="user@example.com">
              </div>
            </div>

            <div class="form-group">
              <label for="verify_email" class="col-sm-2 control-label">Verify Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="verify_email" id="verify_email" placeholder="user@example.com">
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group">
              <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="verify_password" id="verify_password" placeholder="Password">
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>

          </form><!-- End Form -->
        </div><!-- End Col Meduim 8 -->

        <div class="col-md-2">

        </div>

      </div><!-- End Row -->
    </div><!-- End Container -->


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="bootstrap/js/jquery-2.2.3.min.js"></script>
      <script src="https://code.jquery.com/jquery-migrate-1.4.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bootstrap/js/bootstrap.min.js"></script>


      <script>
        $(document).ready(function() {
          $("#registerform").validate({
            rules: {
              verify_email: {
                required: true,
                email: true,
                equalTo: "#email"
              }
            }
          });
        });
      </script>

  </body>
</html>
