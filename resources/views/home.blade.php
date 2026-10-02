<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <H1>Hello World</H1>

    <ul>
        <li><a href="{{ route("home") }}" >Home</a></li>
        <li><a href="{{ route("profilo") }}" >Profilo</a></li>
        <li><a href="{{ route("carrello") }}" >Carrello</a></li>
    </ul>

    <p>{{$info}} </p>
    
</body>
</html>