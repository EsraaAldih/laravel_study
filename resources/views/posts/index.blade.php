@extends('layouts.app')

@section('content')
<a href="/posts/create" class="btn btn-success ml-5 my-5 text-light rounded-pill p-3"> create post</a>

    <table class="table p-3 m-3 bold text- center col-8 border py-5 my-5">
        <thead>
          <tr>
            <th class="p-3 m-3 " scope="col">#</th>
            <th class="p-3 m-3 " scope="col">Title</th>
            <th class="p-3 m-3 " scope="col">description</th>
            <th class="p-3 m-3 " scope="col">Creted at</th>
            <th class="p-3 m-3 " scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $index => $value)  
        <tr>
        <th scope="row">{{$value['id']}}</th>
            <td>{{$value['title']}}</td>
            <td>{{$value['description']}}</td>
            <td>{{$value['created_at']->format('d/m/Y')}}</td>
            <td>
            <a href="{{ route('posts.show',['post' => $value['id']]) }}" height="5" class="col-4 p-3 m-3 bg-success  text-light rounded-pill">View Details</a>
            <a  href="{{ route('posts.edit',['post' => $value['id']]) }}" height="5" class="col-4 p-3 m-3 bg-info  text-light rounded-pill">Edit</a>
            <form method="Post" action="/posts/{{$value->id}}" class="col-4 p-3 m-3 d-inline">
                  @csrf
                 @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger text-light rounded-pill p-3">Delete</button></form>

            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
@endsection
