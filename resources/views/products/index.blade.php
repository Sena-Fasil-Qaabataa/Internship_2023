<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{--  <link rel="stylesheet" href="../CSS/app.css">  --}}
    {{--  <style>
        h1{
            text-align: center;
        }
        table{
padding: 0;
margin: 0;
            text-align: center;
        }
    </style>  --}}
</head>
<body>
    @extends('layouts.base')
    @section('content')
<h1 class="ech2">This is the process of Indexing blade</h1>
{{--  <div>
    @if(session()->has('susccess'))
    <div>
        {{ session ('success') }}
    </div>
    @endif
</div>  --}}
<div >
    <div class="cont">
    <a class="A" href="{{ route('products.create') }}">create a product</a>
</div>
    <table border="4">
        <tr >
            <th>id</th>
            <th>name</th>
            <th>qty</th>
            <th>price</th>
            <th>description </th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($products as $product)
<tr>
    <td>{{ $product ->id }}</td>
    <td>{{ $product ->name }}</td>
    <td>{{ $product ->qty}}</td>
    <td>{{ $product ->price }}</td>
    <td>{{ $product ->description }}</td>
    <td>
        <a href="{{ route('product.edit', ['product'=> $product])}}">edit</a>
    </td>
    <td>
        <form method="POST" action="{{ route('product.destroy' ,['product' =>$product]) }}">
            @csrf
            @method('delete')
        <input type="submit" value="delete" />
    </form>
    </td>
</tr>
        @endforeach
    </table>
</div>
@endsection
</body>
</html>
