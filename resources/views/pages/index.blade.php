@extends('layouts.master')


@section('content')

    <div class="list-group">
        @foreach($teams as $team)
        
        <a href="teams/{{$team->id}}" class="list-group-item">{{$team->name}}</a>
        @endforeach
     </div>

@endsection

