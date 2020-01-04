
@extends('layouts.app')

@section('content')


<div class="container">


 



    <div class="card mb-2">
  <h5 class="card-header">Post Info</h5>
  <div class="card-body row">
    <h5 class="card-title bold"> Title :  </h5>
    <p class="card-text">{{$post['title']}}.</p>
    
  </div>

  <div class="card-body row">
    <h5 class="card-title bold"> Description :  </h5>
    <p class="card-text">{{$post['description']}}</p>
    
  </div>
</div>

<div class="card">
  <h5 class="card-header"> Creator info</h5>
  <div class="card-body row">
    <h5 class="card-title bold"> Post creator :  </h5>
    <p class="card-text">{{$post->user->name}}</p>
    
  </div>

  <div class="card-body row">
    <h5 class="card-title bold"> Email :  </h5>
    <p class="card-text ">{{$post->user->email}}</p>
    
  </div>
  <div class="card-body row">
    <h5 class="card-title bold"> Created_at :  </h5>
    <p class="card-text ">{{$post->created_at->format('l jS \of F Y h:i:s A')}}</p>
    
  </div>
</div>

</div>


@endsection
