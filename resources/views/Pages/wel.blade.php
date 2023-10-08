<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    @extends('layouts.base')
    @section('content')
    <h1 class=" text-center">Hello students</h1>
    <div class="container mt-5">
    <form action="sign.php" method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" placeholder="enter your name" name="Name" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Id</label>
    <input type="password" class="form-control" placeholder="enter your identification number" name="username">
  </div>
  <button  type="submit" class="text-center btn btn-primary w-100 ">Submit</button>
</form>
</div>
@endsection
  </body>
</html>
