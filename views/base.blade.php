<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
      @yield('browsertitle')
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/styles.css">

    @yield('css')

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    @include('topnav')

    @yield('outsidecontainer')<!-- Carousel -->

    <div class="container">

      <div class="row">
        <br><br>
        @include('errormessage')
      </div>

      @yield('content')

    </div><!-- End Container -->

      <div class="row  footer-background">
        <div class="col-md-3 text-center">
          <H4>Contact Us</H4>
            70 Burnley Street <br>
            Birches Head <br>
            Stoke-On-Trent <br>
            ST1 6NT <br>
            +44 7501 758 579
        </div>
        <div class="col-md-6 text-center">

        </div>
        <div class="col-md-3 text-center">
          <img class="pull-right" src="/assets/map-small.png" alt="Find Us">
        </div>
      </div>

    <!-- End footer  -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="/bootstrap/js/jquery-2.2.3.min.js"></script>-->
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

    @yield('bottomjs')

  </body>
</html>
