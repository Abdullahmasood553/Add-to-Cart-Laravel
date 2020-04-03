@extends('layouts.app')

@section('content')
<div class="col-lg-3">

    <h1 class="my-4">Shop Name</h1>
    <div class="list-group">
      <a href="#" class="list-group-item">Category 1</a>
      <a href="#" class="list-group-item">Category 2</a>
      <a href="#" class="list-group-item">Category 3</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
  
    <div class="card mt-4">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{ $product->name }}</a>
            </h4>
            <h5>{{ $product->price }}</h5>
            <p class="card-text">{{ $product->description }}</p>
          </div>    
    </div>
    <!-- /.row -->
  </div>
  <!-- /.col-lg-9 -->
@endsection