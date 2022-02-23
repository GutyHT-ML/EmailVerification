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
            <div class="row">
              @yield('row')
              <h1>{{ $email }}</h1>
              <h2>Se le ha enviado un correo con el código de verificación</h2>
              <form method="POST" action="/login">
                @csrf
                <label for="code">Introducir codigo</label>
                <input id="code" name="code" class="input" type="text" placeholder="Code" required>
                
                <input id="email" name="email" hidden value="{{$email}}">
                <button type="submit">Verificar</button>
              </form>
            </div>
          </div>

    </body>
</html>