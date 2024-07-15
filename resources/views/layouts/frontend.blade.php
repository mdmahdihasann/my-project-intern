<!doctype html>
<html lang="en">
    <head>
        <title>My Project</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
        
    </head>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
    <body >
        @include('frontend.include.header')
        
        <main>
            @yield('content')
        </main>
       @include('frontend.include.footer')
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
