<html>
    <body> 
    <head>
        <title>App Name - @yield('title')</title>
        <style type="text/css">
          * {
            color: brown;
            text-align: center;
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
    <h1>Signup</h1>
            <form method="POST" action="/register">
              @csrf
              <label for="password">Name</label>
              <br>
              <input id="name" name="name" placeholder="Juan" type="text" required
              class="@error('name')
                is-invalid
              @enderror">

              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <br><br>

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

              <label for="password">Contraseña</label>
              <br>
              <input id="password" name="password" type="password" class="@error('password')
                is-invalid
              @enderror">

              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              
              <br><br>

              <button type="submit" class="button button-danger">Registrarse</button>
            </form>
    </body>
</html>