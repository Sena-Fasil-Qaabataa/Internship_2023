@extends('layouts.base')
@section('style')
<style>
  #pro{ 
height: 200px;
width: 1000px;
  }
</style>
@endsection


@section('content')
<p>this is photo</p>
<div>
<img id="pro" src="{{ asset('muni.jpg') }} " alt="">
@endsection
