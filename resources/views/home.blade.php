<html>
    <body> 
    <head>
        <title>App Name - @yield('title')</title>
    </head>
        <div class="container">
            @yield('content')
            <h2>Hola!</h2>
            <h2>Bienvenido {{ $name }}</h2>
        </div>
    </body>
</html>