@extends('layouts.master')


@section('content')


    <div class="list-group">
        <h1>Teams: </h1>   
        
            @foreach($teams as $team)

                
                <a href="teams/{{$team->id}}" class="list-group-item">{{$team->name}}</a>
                
            
            @endforeach
         
     </div>
     
@endsection

