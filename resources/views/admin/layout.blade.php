<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <title>Admin</title>
    </head>
    <body>

        <!-- Image and text -->
        <nav class="navbar navbar-dark bg-dark">
            <ul class='navbar-nav flex-row'>
                <li class='nav-item'>
                    <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                        FronteiraTec
                    </a>
                </li>

                <li class='nav-item'>
                    <a class="navbar-brand" href="{{ route('admin.blog.index') }}">
                        Blog
                    </a>
                </li>
            </ul>
            
        </nav>

        @yield('content')

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>