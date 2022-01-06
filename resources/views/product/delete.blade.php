@extends('layouts.app',['title' => $title])
@section('content')
<style>.item-list {display:inline-block;}</style>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.products') }}">Mys products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.create') }}">Create a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('product.delete') }}">Delete a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.profile') }}">My profile</a>
      </li>
    </ul>
  </div>

  <div class="container pt-5">
    @foreach ($products as $product)

        <div class="card item-list" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>

            <a href="/product/detail/{{$product->id}}" class="btn btn-primary mb-2">See details</a>
            <form style="display:inline-block;" action="/product/delete/save/{{$product->id}}" method="post">
              @csrf
              <button class="btn btn-danger mt-3 ml-3 mb-4" type="submit">Delete</button>
            </form>
        </div>

    @endforeach
    </div>
@endsection
