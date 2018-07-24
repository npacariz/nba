@extends('layouts.master')


@section('content')

    <div class="container">
        <div class="jumbotron">
          <h1> {{$team->name}}</h1> 
          <ul>
            <li>email: {{$team->email}}</li>
            <li>address: {{$team->address}}</li>
            <li>city: {{$team->city}}</li>
          </ul>
        </div>
        <p>Players:</p> 
        <ol>
            @foreach($team->players as $player)
                <li><a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></li>
            @endforeach
        </ol>
    </div>
     

@endsection

