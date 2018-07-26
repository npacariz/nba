@extends('layouts.master')


@section('content')

    <div class="container">
        <div class="jumbotron">
          <h1> {{$player->first_name}} {{$player->last_name}}</h1> 
          
          <ul>
            <li>email: {{$player->email}}</li>
            <li>Team: <a href="/teams/{{$player->team->id}}">{{$player->team->name}}</a></li>      
          </ul>
        </div>
    </div>
     

@endsection 