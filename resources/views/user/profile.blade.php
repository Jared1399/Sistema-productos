@extends('layouts.app',['title' => $title])
@section('content')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.products') }}">Mis productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.create') }}">Create a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.delete') }}">Delete a product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('user.profile') }}">My profile</a>
      </li>
    </ul>
  </div>

  <div class="card-body">
    <div class="card ">
    <div class="card-header text-left">
        My profile
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $separated = explode(" ", $user->name);
      ?>
    <tr>
      <td>{{$separated[0]}}</td>
      <td>{{$separated[1]}}</td>
      <td>{{$user->email}}</td>
    </tr>

  </tbody>
</table>
    </div>
  </div>
</div>
@endsection