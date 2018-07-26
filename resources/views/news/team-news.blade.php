
@extends('layouts.master')


@section('content')         
        @foreach($team[0]->news as $new)
        <h1>Title: {{$new->title}}</h1> 
        <h5>Team: {{$new->teams[0]->name}}</h5> 
        <p>Content: {{$new->content}}</p>
        <p>Created at: {{$new->created_at}}</p>
        </div>
        <div class="item">
            
        <h5>User: </h5> 
        <h4> Name: {{$new->user->name}}</h4> 
        <h5>email: {{$new->user->email}}</h5>
        </div>
        @endforeach

@endsection

