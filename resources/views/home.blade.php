<html>
    <body> 
    <head>
        <title>App Name - @yield('title')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
        <div class="container">
            @yield('content')
            <h1>
              Bienvenido {{ $name }}
            </h1>
        </div>
    </body>
</html>