<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <title>Admin</title>
    </head>
    <body>

        <!-- Image and text -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                FronteiraTec
            </a>
        </nav>

        @yield('content')

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>