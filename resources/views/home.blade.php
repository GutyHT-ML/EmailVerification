<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body> 
        <div class="container">
            @yield('content')
            <h1>
              Bienvenido {{ $name }}
            </h1>
        </div>
    </body>
</html>