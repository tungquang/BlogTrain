<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title> {{config('app.name')}} </title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> 

    
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/bootstrap-progressbar-3.3.4.min.css')}}">
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet" type="text/css">
        <!-- jQuery -->
      {{-- ckeditor --}}
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
   
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin.layouts.nav')

        <!-- top navigation -->
       @include('admin.layouts.header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.layouts.footer')
        <!-- /footer content -->
      </div>
    </div>


    <!-- NProgress -->
    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
        {{-- bootstrap --}}
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('js/bootstrap/bootstrap-progressbar.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>
    
    
  </body>
</html>
