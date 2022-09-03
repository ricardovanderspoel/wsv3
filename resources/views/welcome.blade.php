<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="h-full">
        @if (Auth::check())
    @php
    $user_auth_data = [
        'isLoggedin' => true,
        'user' =>  Auth::user()
    ];
    @endphp
    @else
        @php
        $user_auth_data = [
            'isLoggedin' => false
        ];
        @endphp
    @endif
    <script>
        window.Laravel = JSON.parse(atob('{{ base64_encode(json_encode($user_auth_data)) }}'));
    </script>
        <div id="app">
            <start></start>
          </div>
          
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>