<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
       
    </head>
    <body class="bg-gray-400 text-gray-900 flex flex-col items-center">
       <h1>Hello</h1>
        {{$slot}}
    </body>
</html>
