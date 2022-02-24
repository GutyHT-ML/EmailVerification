<html>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>Código de autenticación</h1>
              <h2>{{$name}}</h2>
              <label>
                {{$code}}
              </label>
              </form>
            </div>
          </div>
    </body>
</html>