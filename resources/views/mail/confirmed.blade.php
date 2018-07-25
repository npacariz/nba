
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h5>
        "Hello {{$user->name}}, click on link blow  to confirme you account"
    </h5>
    <h6>
        <a href="{{ url('/confirme/'.$user->id.'/'.$user->token)}}"> Confirm your account</a>
    </h6>
</body>
</html>

                 
