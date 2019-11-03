@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <h1>{{$when}}</h1>
    <h1>Team</h1>
    @if(count($team) > 0)
        <ul class="list-group">
            @foreach($team as $member)
                <li class="list-group-item">{{$member}}</li>
            @endforeach
        </ul>
    @endif
    <p>About</p>
@endsection