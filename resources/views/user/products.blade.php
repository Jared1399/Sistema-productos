@extends('layouts.app',['title' => $title])
@section('content')
<style>
    .card {display:inline-block;}
</style>



<div class="card text-center w-100 pb-5">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('user.products') }}">My products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('product.create') }}">Create a product</a>
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
    @foreach ($products as $product)

        <div class="card item-list" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product[0]->name}}</h5>
                <p class="card-text">{{$product[0]->description}}</p>
            </div>
            <div class="btn btn-primary mt-3 mb-4 mt-4">
                <a class="text-reset text-decoration-none" href="{{asset('product/detail/'.$product[0]->id)}}">Details</a>
            </div>

            <form style="display:inline-block;" action="/user/sell/{{$product[0]->id}}" method="post">
              @csrf
              <button class="btn btn-danger" type="submit">Sell</button>
            </form>

        </div>

    @endforeach
    </div>

@endsection
