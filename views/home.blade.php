@extends('base')

{% extends 'base.html' %}

@section('css')
  <style>
    .carousel {
      width: 100%;
      margin-top: 20px;
    }
  </style>
@stop

  @section('outsidecontainer')
  <div class="row">
    <div class="col-md-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="/assets/slider/1-computer-man.jpg" alt="Image One">
            <div class="carousel-caption">
              Writing Code Should be Fun like Never Before!
            </div>
          </div>

          <div class="item">
            <img class="carousel" src="/assets/slider/2-camera-lady.jpg" alt="Camera Lady">
            <div class="carousel-caption">
              Experience True Nature!
            </div>
          </div>

          <div class="item">
            <img class="carousel" src="/assets/slider/3.jpg" alt="Nature">
            <div class="carousel-caption">
              Money Cant Buy The Delights of Nature!
            </div>
          </div>

          <div class="item">
            <img class="carousel" src="/assets/slider/4.jpg" alt="Camera Lady">
            <div class="carousel-caption">
              Just living is not enough, one must have sunshine, freedom, and a little flower!.
            </div>
          </div>

          <div class="item">
            <img class="carousel" src="/assets/slider/5.jpg" alt="Camera Lady">
            <div class="carousel-caption">
              Nature holds the key to our intellectual and spiritual satisfaction.
            </div>
          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- End Image Slider -->
    </div><!-- End md-12-col -->
  </div><!-- End Row -->

  @stop


  @section('content')

      <div class="row">
        <div class="col-md-4 well text-center">
          <h3>About</h3>
          <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tlore magna aliqua. </p>
        </div>

        <div class="col-md-4 well empty-well text-center">
          <h3>Tour</h3>
          <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia d est laborum.</p>
        </div>

        <div class="col-md-4 well text-center">
          <h3>Contact</h3>
          <span class="glyphicon glyphicon-earphone bigger-icon" aria-hidden="true"></span>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia d est laborum.</p>
        </div>
      </div><!-- End Row 4 col -->

  @stop
