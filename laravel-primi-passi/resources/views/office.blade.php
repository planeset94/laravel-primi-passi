<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    <style>
    .content {
        position: absolute;
        left: 50%;
        margin-top: 10px;
        transform: translateX(-50%);
    }

    .title {
        font-size: 5rem;
        text-align: center
    }
    </style>


</head>

<body>

    <div class="content">
        <div class="title">
            Hello Office!!!
        </div>
        <p>Nome: {{$name}}</p>
        <p>Cognome: {{$lname}}</p>
        <p>Età: {{$age}}</p>




    </div>
    </div>
</body>

</html>