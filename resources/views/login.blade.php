<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="h-full">
        <div id="app" style="height:100%">
            <login></login>
          </div>
          
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>