<!-- Stored in resources/views/home.blade.php -->

<html>
    <head>
        <title>Page Tittle - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('loginbar')
        @show
    </body>
</html>