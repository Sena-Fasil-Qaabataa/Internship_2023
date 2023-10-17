@extends('layouts.base')
@section('content')


<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Register</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('product.index')}}" method ="post">
        @csrf
        @method('post')
      <div class="card-body">
        <div class="form-group">
          <label>name</label>
          <input name="name" type="text" class="form-control"  placeholder=" name">
        </div>
        <div class="form-group">
          <label>qty</label>
          <input name="qty" type="text" class="form-control"  placeholder="qty">
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input name="price" type="text" class="form-control"  placeholder="price">
          </div>
          <div class="form-group">
            <label for="description">description</label>
            <input name="description" type="text" class="form-control"  placeholder="description">
          </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>

@endsection

