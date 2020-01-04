@extends('layouts.app')

@section('content')
    <h1 class = "text-center py-5 my-3">Create Post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" class="col-8 text-center m-5 border p-5" action="/posts">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
          <label for="exampleInput">description</label>
          <textarea id = 'exampleInput' class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
        </div>
             
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection

