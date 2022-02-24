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
    <h1 style="text-align: center;">Login</h1>
    @yield('content')
            
    <form method="POST" action="/request-code" style="text-align: center;">
    @csrf
    <label for="email">Email</label>
              <br>
              <input id="email" name="email" type="email" required
              class="@error('email')
                is-invalid
              @enderror">
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 

              <br><br>

              <label for="password">Password</label>
              <br>
              <input id="password" name="password" type="password" required
               class="@error('password')
                is-invalid
              @enderror">

              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <br><br>

              <button type="submit" class="button button-danger">Iniciar sesion</button>
              <br><br>
              <a href="/register">Registrarse</a>
            
            </form>
    </body>
</html>