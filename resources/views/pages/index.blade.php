@extends('layouts.master')


@section('content')


    <div class="list-group">
        <h1>Teams: </h1>   
        <ul>
            @foreach($teams as $team)

                <li>
                    <a href="teams/{{$team->id}}" class="list-group-item">{{$team->name}}</a>
                </li>
            
            @endforeach
         </ul>
     </div>
     
@endsection

