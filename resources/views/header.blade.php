<!DOCTYPE html>
<html lang="en">
<head>
<title>Gestion locative </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="/assets/style.css"/>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="/assets/owl-carousel/owl.theme.css">

<link rel="stylesheet" type="text/css" href="/assets/slitslider/css/style.css" />
<link rel="stylesheet" type="text/css" href="/assets/slitslider/css/custom.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<!-- Owl stylesheet -->




</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/agents') }}">Nos agents</a></li>
                <li><a href="{{ url('/contact') }}">contact</a></li>         
                <li><a href="{{ url('/about') }}">A propos</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->


  <div class="">
    
        @yield('contenu')
  </div>
  <!-- slitslider -->



    <script type="text/javascript" src="/assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="/assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="/assets/slitslider/js/jquery.slitslider.js"></script>

    <script src="/asset/bootstrap/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="/assets/holder.js"></script>
    <script src="/assets/script.js"></script>
    <script src="/assets/owl-carousel/owl.carousel.js"></script>


<!-- slitslider -->

  @extends('footer')


  