@if($errors->has($field))
    @foreach($errors->get($field) as $error)
        <div class='alert-danger'>
            {{$error}}
        </div>
    @endforeach
@endif