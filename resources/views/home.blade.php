<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        {{-- Header --}}
        <header>
            <a href="/" class="brand"> Site Logo</a>
        </header>
        {{-- Main --}}
        <main>
            <h1>Homepage</h1>
        </main>
        <footer>
             <p>Site La Molisana</p>
        </footer>
    </body>
</html>
