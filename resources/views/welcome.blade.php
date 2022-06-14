<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap no Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </head>
    <body>
        <h1>Utilizando Bootstrap</h1>
        <button class="btn btn-lg btn-success">Bootstrap</button>
    </body>
</html>