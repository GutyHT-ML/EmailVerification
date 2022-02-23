<html>
    <body> 
    <head>
        <title>App Name - @yield('title')</title>
    </head>
        <div class="container">
            @yield('content')
            <form method="POST" action="/request-code">
              @csrf
              <label for="email">Email</label>
              <input id="email" name="email" type="email" required
              class="@error('email')
                is-invalid
              @enderror">
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 

              <br>

              <label for="password">Password</label>
              <input id="password" name="password" type="password" required
               class="@error('password')
                is-invalid
              @enderror">

              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <br>

              <button type="submit" class="button button-danger">Iniciar sesion</button>
            </form>
        </div>
        <a href="/register">Registrarse</a>
    </body>
</html>