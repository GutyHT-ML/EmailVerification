<html>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>Verificación de email</h1>
              <h2>{{$user->name}}</h2>
              <label>Verifique su email</label>
              <form action="{{config('app.url')}}:8000/verify-email" method="GET">
                <input type="hidden" name="email" id="email" value="{{$user->email}}">
                <button type="submit">Verificar email</button>
              </form>
            </div>
          </div>
    </body>
</html>