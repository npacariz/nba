@extends('layouts.master')


@section('content')
    <h1>Create News</h1>
<form action="/news/create" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">News Title</label>
      <input type="text" class="form-control" name='title' id="title">
    </div>
    <div class="form-group">
      <label for="content">Artical</label>
      <textarea class="form-control" id="content" name='content' rows="3"></textarea>
    </div>
  
    <div class="form-check">
    <p>Check teams related to news:</p>
    @foreach($teams as $team)
          <input class="form-check-input" type="checkbox" value="{{$team->id}}" name='teams[]'>
        <label class="form-check-label" for="defaultCheck1">
          {{$team->name}}
        </label>
    @endforeach   
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Publish News</button>
  </form>

@endsection