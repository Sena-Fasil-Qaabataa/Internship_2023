<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Document</title>
</head>
<body>
<h1>This is the process of Indexing blade</h1>
<div>
    @if(session()->has('susccess'))
    <div>
        {{ session ('success') }}
    </div>
    @endif
</div>
<div>
    <a href="{{ 'product.create' }}">create a product</a>
    <table border="2">
        <tr>
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
</body>
</html>
