<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <div>
        <ul>
            <div>
                <li>{{$myself['nome']}}</li>
                <li>{{$myself['cognome']}}</li>
                <li>{{$myself['anni']}}</li>
                <a href="{{url('/userOne')}}"><button>INFO</button></a>
            </div>
            <div>
                <li>{{$anotheruser['nome']}}</li>
                <li>{{$anotheruser['cognome']}}</li>
                <li>{{$anotheruser['anni']}}</li>
                <a href="{{url('/userTwo')}}"><button>INFO</button></a>
            </div>
            <div>
                <li>{{$thirduser['nome']}}</li>
                <li>{{$thirduser['cognome']}}</li>
                <li>{{$thirduser['anni']}}</li>
                <a href="{{url('/userThird')}}"><button>INFO</button></a>
            </div>
        </ul>
    </div>
    
</body>
</html>