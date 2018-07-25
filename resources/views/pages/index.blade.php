@extends('layouts.master')


@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            <h4>{{ session('success') }} </h4>    
        </div>
    @endif
    <div class="list-group">
        @foreach($teams as $team)

        <a href="teams/{{$team->id}}" class="list-group-item">{{$team->name}}</a>

        @endforeach
     </div>

@endsection

