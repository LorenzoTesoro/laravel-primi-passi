<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>Hello World!</h1>

    <div class='details'>
        <p class="name">{{$name}}</p>
        <p class="lastname">{{$lastname}}</p>
        <p class="age">{{$age}}</p>
        @foreach ($interests as $interest)
        <p class="interests">{{$interest}}</p>
        @endforeach
    </div>
</body>

</html>