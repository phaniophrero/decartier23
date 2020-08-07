<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Producers Studio De Cartier 23"
        content="De Cartier 23 is the place where you can get your desired instrumental beats and listen the best high quality music old school, rap, trap you name it and we got it.">

    <title>De Cartier 23</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')
</body>

</html>