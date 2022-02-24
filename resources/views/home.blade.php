<html>
    <body> 
    <head>
        <title>App Name - @yield('title')</title>
        <style type="text/css">
          * {
            color: brown;
          }
          body {
            background-color: #FCFCE0;
          }
          h1 {
            color: brown;
          }
          label {
            color: brown;
          }
          input {
            color: brown;
            background-color: #FFFFC8;
          }
        </style>
    </head>
        <div class="container">
            @yield('content')
            <h2>Hola!</h2>
            <h2>Bienvenido {{ $name }}</h2>
        </div>
    </body>
</html>