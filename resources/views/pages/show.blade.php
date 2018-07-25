@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="flexbox">
                <div>
                    <h1> {{$team->name}}</h1> 
                    <ul>
                        <li>
                            email: {{$team->email}}
                        </li>
                        <li>
                            address: {{$team->address}}
                        </li>
                        <li>
                            city: {{$team->city}}
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <p>Players: </p> 
                    <ol>
                        @foreach($team->players as $player)
                            <li>
                                <a href="/players/{{$player->id}}">
                                    {{$player->first_name}} {{$player->last_name}}
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        <form action="/comment/{{$team->id}}/create" method="POST">
            {{csrf_field()}}    
            <div class="form-group">
                <label for="content">Comment:</label>
                <textarea class="form-control" rows="5" id="content" name='content'></textarea>
                @include('partials.errors',['field' => 'content'])
            </div>
            <button type="submit" class="btn btn-default">Add Comment</button>
        </form>
        
        <div class="row">
            <div class="col-md-8">
                <div class="page-header">
                    <h4> Comments </h4>
                </div> 
                <div class="comments-list">
                    @foreach($team->comments as $comment)
                        <div class="media">
                            <p class="pull-right"><small></small></p>
                            <div class="media-body">
                            <h4 class="media-heading user_name">{{$comment->user->name}}</h4>
                            {{$comment->content}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
     
        
    </div>


@endsection

