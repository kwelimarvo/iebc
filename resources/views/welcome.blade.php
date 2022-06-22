<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                <div class="p-3 cursor-pointer rounded-md bg-rose-400">
                    <!-- <hello-world/> -->
                    <products img="https://hplussport.com/wp-content/uploads/2016/12/slicker-jacket_LYNDA_29941.jpg" />
                </div>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>