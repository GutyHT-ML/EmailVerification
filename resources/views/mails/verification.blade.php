<html>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>{{ $name }}</h1>
              <label>Hola si funciona</label>
            </div>
          </div>
    </body>
</html>