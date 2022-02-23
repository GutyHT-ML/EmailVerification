<html>
    <head>
        <title>Register - @yield('title')</title>
    </head>
    <body> 
        <div class="container">
            @yield('content')
            <form method="POST" action="/register">
              @csrf
              <label for="password">Name</label>
              <input id="name" name="name" placeholder="Juan" type="text" required
              class="@error('name')
                is-invalid
              @enderror">

              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <label for="email">Email</label>
              <input id="email" name="email" type="text" required
              class="@error('email')
                is-invalid
              @enderror">

              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 

              <label for="password">Contraseña</label>
              <input id="password" name="password" type="password" class="@error('password')
                is-invalid
              @enderror">

              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <button type="submit" class="button button-danger">Registrarse</button>
            </form>
        </div>
    </body>
</html>