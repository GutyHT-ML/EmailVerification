<html>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>{{$user->name}}</h1>
              <label>Verifique su email</label>
              <form action="{{config('app.url')}}/verify-email" method="GET">
                <input type="hidden" name="email" id="email" value="{{$user->email}}">
                <button type="submit">Verificar email</button>
              </form>
            </div>
          </div>
    </body>
</html>