
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron">
        <h1> "Hello {{$comment->team->name}}, you have new comment!"</h1> 
        <h6>Comment content: </h6>
        <p>{{$comment->content}}</p>
        <p>By: {{$comment->user->name}} at {{$comment->created_at->diffForHumans()}} </p>
        <a href="{{ url('/teams/'.$comment->team->id)}}">Link to comment</a>
    </div>

</body>
</html>

                