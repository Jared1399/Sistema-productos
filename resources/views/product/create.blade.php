@extends('layouts.app',['title' => $title])
@section('content')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.products') }}">My products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('product.create') }}">Create a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.delete') }}">Delete a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.profile') }}">My profile</a>
      </li>
    </ul>
  </div>


  <div class="py-5">
  <div class="card w-75 mx-auto">
    <div class="card-header">
      Create your own product
    </div>
    <div class="card-body">

      <form action="/product/create/save" method="POST"> 
      @csrf
        <div class="form-group text-left">
          <label for="name">Product name</label>
          <input name="name"class="form-control" type="text" placeholder="Product name" id="name">
        </div>
        <div class="form-group text-left">
          <label for="description">Describe yout product</label>
          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
  </div>

  </div>


@endsection
