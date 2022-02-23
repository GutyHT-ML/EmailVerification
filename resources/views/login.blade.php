<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body> 
        <div class="container">
            @yield('content')
            <form method="POST" action="/register">
              @csrf
              <label for="email">Email</label>
              <input id="email" type="text" class="@error('email')
                is-invalid
              @enderror">

              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 

              <label for="password">Password</label>
              <input id="password" type="password" class="@error('password')
                is-invalid
              @enderror">

              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <button type="submit" class="button button-danger">Iniciar sesion</button>
            </form>
        </div>
        <a href="/register">Registrarse</a>
    </body>
</html>