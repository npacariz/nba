@extends('layouts.master')


@section('content')

    <h1>Login: </h1>
    @if (session('message'))
        <div class="alert alert-success">
            <h4>{{ session('message') }} </h4>    
        </div>
    @endif
    <form action="/login" method="POST">
        {{csrf_field()}}    
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control"  name="email"  id="email">
            @include('partials.errors',['field' => 'email'])
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name='password' id="password">
            @include('partials.errors',['field' => 'password'])
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        @include('partials.errors',['field' => 'message'])
    </form>
@endsection

    