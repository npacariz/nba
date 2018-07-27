
@extends('layouts.master')

@section('content')         
        @foreach($news as $newz)    
            <div class="jumbotron">
               <h3>News:  <a href="/news/{{$newz->id}}"> {{$newz->title}} </a></h3> 
                <hr>
                <p> Related to: 
                @foreach($newz->teams as $team)
                   {{$team->name}},
                @endforeach
                 </p>
                <hr>
                <p>Content: {{$newz->content}}</p> 
                <p>Create by: {{$newz->user->name}} at {{$newz->created_at}} </p>
            </div>
        @endforeach
       
        <nav class="blog-pagination">
                <a class ="btn btn-outline-{{$news->currentPage() == 1 ? 'secondary disabled': 'primary' }}" href="{{$news->previousPageUrl()}}">Previous</a>
                <a class ="btn btn-outline-{{$news->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{$news->nextPageUrl()}}">Next</a>
        </nav> 
            
        Page {{$news->currentPage()}} of {{$news->lastPage()}}
@endsection 

