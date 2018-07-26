@extends('layouts.master')


@section('content')

    <div class="list-group">
        <h1>News: </h1>
       
        <ul>
            @foreach($news as $newz)
            <li>
            <a href="/news/{{$newz->id}}"><h4>{{$newz->title}}</h4></a>
                <p>{{$newz->content}}</p>
            <p>Posted by: {{$newz->user->name}} , {{$newz->created_at->diffForHumans()}} ago</p>
            </li>
            <hr>
            @endforeach
        </ul>
       
     </div>

     <nav class="blog-pagination">
    <a class ="btn btn-outline-{{$news->currentPage() == 1 ? 'secondary disabled': 'primary' }}" href="{{$news->previousPageUrl()}}">Previous</a>
        <a class ="btn btn-outline-{{$news->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{$news->nextPageUrl()}}">Next</a>
    </nav> 

            Page {{$news->currentPage()}} of {{$news->lastPage()}}


@endsection

