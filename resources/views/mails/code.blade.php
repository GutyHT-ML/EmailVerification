<html>
    <body> 
        <div class="container">
            @yield('content')
            <div class="row">
              @yield('row')
              <h1>{{$user->name}}</h1>
              <label>
                {{$user->verification_code}}
              </label>
              </form>
            </div>
          </div>
    </body>
</html>