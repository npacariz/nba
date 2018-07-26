@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="flexbox">
                <div>
                    <h1>Title: {{$news->title}}</h1> 
                    <p>Content: {{$news->content}}</p>
                    <p>Created at: {{$news->created_at}}</p>
                </div>
                <div class="item">
                    <h5>User: </h5> 
                    <h4> Name: {{$news->user->name}}</h4> 
                    <h5>email: {{$news->user->email}}</h5>
             
                </div>
            </div>
        </div>

        
     
        
    </div>


@endsection

