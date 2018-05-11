<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <!-- jQuery library -->
     <script type="{{asset('js/jquery/jquery-2.1.4.min.js')}}"></script>
    <!-- Custom styles for this template -->
   
  </head>

  <body>

    <!-- Navigation -->
    @include('layouts.nav')

    <!-- Page Header -->
    @include('layouts.header')

    <!-- Main Content -->
    @yield('content')

    <hr>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/clean-blog.min.js')}}"></script>

  </body>

</html>
