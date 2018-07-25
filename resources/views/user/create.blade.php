@extends('layouts.master')


@section('content')

    <h1>Register: </h1>

    <form action="/user" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
            @include('partials.errors',['field' => 'name'])
        </div>
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
    </form>
    
    
@endsection

