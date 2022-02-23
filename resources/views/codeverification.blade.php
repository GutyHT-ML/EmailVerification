<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>{{ $email }}</h1>
              <label for="code">Introducir codigo</label>
              <input id="code" name="code" class="input" type="text" placeholder="Code">
            </div>
          </div>
    </body>
</html>