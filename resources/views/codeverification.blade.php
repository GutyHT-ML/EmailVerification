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
    </body>
</html>