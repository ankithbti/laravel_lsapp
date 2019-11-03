@extends('layouts.app')

@section('content')
    <h2>Title: {{$post->title}}</h2>
    <small>Written on {{$post->created_at}}</small>
    <p>{!!$post->body!!}</p>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <div class="float-right">
        <a href="/posts" class="btn btn-primary">Go Back</a>
    </div>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection