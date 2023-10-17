<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
     <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
     <!-- icheck bootstrap -->
     <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
     <!DOCTYPE html>
     <html>
     <head>
       {{--  <style>
         /* Styling for the sidebar */
         .sidebar {
           height: 100%;
           width: 250px;
           position: fixed; /* Keeps the sidebar fixed while scrolling */
           top: 0;
           left: 0;
           background-color: #333; /* Background color */
           padding-top: 20px; /* Space at the top */
         }

         /* Styling for the links in the sidebar */
         .sidebar a {
           padding: 10px 15px;
           text-decoration: none;
           font-size: 20px;
           color: white;
           display: block;
         }

         /* Change link color on hover */
         .sidebar a:hover {
           background-color: #444;
         }
         .navbar a:hover {
            background-color: #000;
          }

       </style>  --}}
     </head>
     <body>
        @extends('layouts.base')
        @section('content')
     <div class="sidebar">
       <a href="#section1">Section 1</a>
       <a href="#section2">Section 2</a>
       <a href="#section3">Section 3</a>
     </div>

       <div id="section3">
         <a href="{{route('product.index')}}">create</a>
       </div>
     </div>
@endsection
     </body>
     </html>
