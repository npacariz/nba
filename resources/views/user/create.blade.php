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
            <label for="password">Password:</label>
            <input type="password" class="form-control" name='password' id="password">
            @include('partials.errors',['field' => 'password'])
        </div>
        <div class="form-group">
            <label for="password_confirmation">password Confirm:</label>
            <input type="password" class="form-control" name='password_confirmation' id="password_confirmation">
            @include('partials.errors',['field' => 'password-confirm'])
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    
    
@endsection

