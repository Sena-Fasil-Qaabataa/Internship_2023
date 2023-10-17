<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About You</title>
</head>
<body>
    @extends('layouts.base')
    @section('content')
<h1 class="Student" >Students Form</h1>
<div class="container">
<form action="sign.php" method="post" >
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input name="email" type="email" class="form-control" placeholder="email" >
</div>
<div class="form-group">
<label for="exampleInputext">Id</label>
<input name="text" type="text" class="form-control" placeholder="enter your id" name="username">
</div>
<button  type="submit" class="text-center btn btn-primary w-100">Submit</button>
</form>
</div>
@endsection
</body>
</html>
