@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
                <small>by {{$post->user->name}}</small>
                {{-- <p>{{$post->body}}</p> --}}
            </div>
        @endforeach
        <hr>
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection