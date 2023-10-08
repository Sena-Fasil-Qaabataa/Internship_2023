@extends('layouts.base')
@section('content')
<h1 class="Student" >Students Form</h1>
<div class="container mt-5">
<form action="sign.php" method="post" >
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="email" class="form-control" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Id</label>
<input type="password" class="form-control" placeholder="enter your id" name="username">
</div>
<button  type="submit" class="text-center btn btn-primary w-100">Submit</button>
</form>
</div>
@endsection
