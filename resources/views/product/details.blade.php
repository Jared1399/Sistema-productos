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
        <a class="nav-link" href="{{ route('product.create') }}">Create a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.delete') }}">Delete a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.profile') }}">My profile</a>
      </li>
    </ul>
  </div>

<div class="container pt-5">
    <div class="row justify-content-center">
    <div class="card" style="width: 22rem;">
  <div class="card-body">
    <h5 class="card-title">{{$details->name}}</h5>
    <p class="card-text">{{$details->description}}</p>
    <a href="{{ route('home') }}" class="card-link">Back to home</a>
    <form style="display:inline-block;" action="/user/buy/{{$details->id}}" method="post">
              @csrf
              <button class="btn btn-primary" type="submit">buy</button>
            </form>
  </div>
</div>
    </div>
</div>
@endsection
