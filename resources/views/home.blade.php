

@extends('layouts.app',['title' => $title])

@section('content')


<style>
.carousel-control-next,
.carousel-control-prev /*, .carousel-indicators */ {
    filter: invert(100%);
}
.item-list {display:inline-block;}
</style>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active " href="{{ route('home') }}">Products</a>
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
  <div class="card-body">        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-header">Welcome to our market!</div>
                            
                        <div class="card-body">
                        
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active bg-dark"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active bg-dark"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item  active">
                                    <div class="card mb-5 mx-auto">
                                        <div class="card-header">
                                            {{$products[0]->name}}
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{$products[0]->description}}</p>
                                            <a href="{{asset('product/detail/'.$products[0]->id)}}" class="btn btn-primary">See details</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card mb-5 mx-auto">
                                            <div class="card-header">
                                                {{$products[1]->name}}
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{$products[1]->description}}</p>
                                                <a href="{{asset('product/detail/'.$products[1]->id)}}" class="btn btn-primary">See details</a>
                                            </div>
                                    </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card mb-5 mx-auto">
                                            <div class="card-header">
                                                {{$products[2]->name}}
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{$products[2]->description}}</p>
                                                <a href="{{asset('product/detail/'.$products[2]->id)}}" class="btn btn-primary">See details</a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container pt-5">
    @foreach ($products as $product)

        <div class="card item-list" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>

            <a href="/product/detail/{{$product->id}}" class="btn btn-primary mb-2">See details</a>
            <form style="display:inline-block;" action="/user/buy/{{$product->id}}" method="post">
              @csrf
              <button class="btn btn-primary mt-3 ml-3 mb-4" type="submit">Buy</button>
            </form>
        </div>

    @endforeach
    </div>


  </div>
</div>
@endsection
