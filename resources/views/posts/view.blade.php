
@extends('layouts.app')

@section('content')


<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">Navbar</a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav text-center">
      <a class="nav-item nav-link active text-center" href="/posts">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-center" href="#">create</a>
    </div>
  </div>
</nav>
</div>


<div class="container mt-5 py-4">
 



    <div class="card">
  <h5 class="card-header">Post Info</h5>
  <div class="card-body row">
    <h5 class="card-title col-3"> Title :</h5>
    <p class="card-text col-6">{{$post['title']}}.</p>
    
  </div>

  <div class="card-body row">
    <h5 class="card-title col-3"> Description :</h5>
    <p class="card-text col-6">{{$post['description']}}</p>
    
  </div>
</div>

</div>


@endsection
