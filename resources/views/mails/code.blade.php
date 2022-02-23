<html>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>Código de autenticación</h1>
              <h2>{{$user->name}}</h2>
              <label>
                {{$user->verification_code}}
              </label>
              </form>
            </div>
          </div>
    </body>
</html>