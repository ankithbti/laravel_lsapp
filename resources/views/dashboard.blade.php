@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-success">Create Post</a>
                    @if(count($posts) > 0)
                        <h3>Your Blog Posts</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Created On</th>
                                <th>By</th>
                                <th>Action</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!! Form::close() !!}
                                    </td>
                                </tr>
                                {{-- <div class="card">
                                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                    
                                    <p>{{$post->body}}</p>
                                </div> --}}
                            @endforeach
                        </table>
                        <hr>
                        {{-- {{$posts->links()}} --}}
                    @else
                        <h3>No Posts yet!!!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
