<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <header>

      <h1><a href="{{route('employee.index')}}">Header</a></h1>
      <p>hello <b>
      @auth
        {{ Auth::user() -> name }}
      @else
        GUEST
      @endauth
      </b></p>
      @auth
        <form  action="{{ route('logout') }}" method="post">
          @csrf
          @method('POST')
          <input type="submit" name="submit" value="LOGOUT">
        </form>
      @else
        <a href="{{ route('login') }}">LOGIN</a>
      @endauth

      @auth
        <form  action="{{ route('user.image') }}" method="post" enctype="multipart/form-data">
          @csrf
          @method ('POST')
          <input type="file" name="image"><br>
          <input type="submit" name="" value="save img">

        </form>

      @endauth

      @auth
        @if (Auth::user() -> image)
          <img src="{{ asset('images/' .  Auth::user() -> image) }}" alt="">

        @endif

      @endauth
    </header>
    @yield('content')
    <footer>
      <h5>Footer</h5>
    </footer>

  </body>
</html>
