@extends('layouts.app')

@section('content')
<div class='text-center'><a href="/posts/create" class="btn btn-success ml-5 my-5 text-light rounded-pill p-3"> create post</a>
    <table class="table p-3 m-3 bold text-center col-10 border py-5 my-5">
        <thead>
          <tr>
            <th class="p-3 m-3 text-center" scope="col">#</th>
            <th class="p-3 m-3 text-center" scope="col">Title</th>
            <th class="p-3 m-3 text-center" scope="col">Description</th>
            <th class="p-3 m-3 text-center" scope="col">Created by</th>
            <th class="p-3 m-3 text-center" scope="col">Email</th>
            <th class="p-3 m-3 text-center" scope="col">Creted at</th>
            <th class="p-3 m-3 text-center" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $index => $value)  
        <tr>
        <th scope="row">{{$value['id']}}</th>
            <td>{{$value['title']}}</td>
            <td>{{$value['description']}}</td>
            <td>{{$value->user->name}}</td>
            <td>{{$value->user->email}}</td>
            <td>{{$value['created_at']->format('d/m/Y')}}</td>
            <td class="d-flex text-center">
            <a href="{{ route('posts.show',['post' => $value['id']]) }}"class="btn btn-success text-light rounded-pill px-3 mx-1" >View Details</a>
            <a  href="{{ route('posts.edit',['post' => $value['id']]) }}" class="btn btn-info text-light rounded-pill px-3 mx-1">Edit</a>
            <form method="Post" action="/posts/{{$value->id}}" class="d-inline mx-1">
                  @csrf
                 @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger text-light rounded-pill px-3">Delete</button></form>

            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
      </div>
@endsection
