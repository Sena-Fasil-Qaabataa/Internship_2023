
      @extends('layouts.base')
    @section('content')  
<h1 >this is create blade</h1>
<div class="card-body">
<form method="POST" action="{{ route('product.update' ,['product'=> $product]) }}">
    @csrf
    @method('put')
    <div class="con ">
<label >Name</label>
<input type="text" name="name" placeholder="enter your name" value="{{ $product->name }}">
</div>
<div>
    <label >qty</label>
    <input type="text" name="qty" placeholder="enter your quantity num" value="{{ $product->qty }}">
    </div>
     <div>
        <label >Price</label>
        <input class="" type="text" name="price" placeholder="enter price" value="{{ $product->price }}">
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="enter your description" value="{{ $product->description }}">
        </div>
            <input type="submit w-50" value="update value"/>

    </div>
</form>
@endsection

