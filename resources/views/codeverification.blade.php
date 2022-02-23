<html>
    <body> 
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>Introduzca el código de autenticación</h1>
              <h2>{{ $email }}</h2>
              <h3>Se le ha enviado un correo con el código de verificación</h3>
              <form method="POST" action="/login">
                @csrf
                <label for="code">Introducir codigo</label>
                <input id="code" name="code" class="input" type="text" placeholder="Code" required>
                <br>
                <input id="email" name="email" hidden value="{{$email}}">
                <br>
                <button type="submit">Verificar</button>
              </form>
            </div>
          </div>

    </body>
</html>