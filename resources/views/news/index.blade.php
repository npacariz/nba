@extends('layouts.master')


@section('content')
        @if(session()->has('success'))
            <div class='alert alert-success'>
            <strong>{{session()->get('success')}}</strong>
            </div>
        @endif
    <div class="list-group">
        <h1>News: </h1>
       
        <ul>
            @foreach($news as $artical)
            <li>
            <a href="/news/{{$artical->id}}"><h4>{{$artical->title}}</h4></a>
                <p>{{$artical->content}}</p>
            <p>Posted by: {{$artical->user->name}} , {{$artical->created_at->diffForHumans()}} ago</p>
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

