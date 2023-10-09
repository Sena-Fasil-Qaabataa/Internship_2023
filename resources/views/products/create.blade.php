<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  @dd(asset('css'))  --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Create page</title>
</head>
<body>
    @extends('layouts.base')
    @section('content')
<h1 class="H">this is Create page</h1>
<div>
@if($errors->any())

<ul>
    @foreach ($errors-> all() as $error)
<li>
    {{ $error }}
</li>

    @endforeach
</ul>
@endif
</div>
<div class="conta">
<form  method="POST" action="{{ route('product.store') }}">
    @csrf
    @method('post')
    <div>
<label >Name</label>
<input type="text" name="name" placeholder="enter your name">
</div>
<div>
    <label >qty</label>
    <input type="text" name="qty" placeholder="enter your quantity num">
    </div>
    <div>
        <label >Price</label>
        <input type="text" name="price" placeholder="enter price">
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="enter your description">
            </div>
            <input type="submit" value="save value"/>
</form>
</div>
@endsection
</body>
</html>
