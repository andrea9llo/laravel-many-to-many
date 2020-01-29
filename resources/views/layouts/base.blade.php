<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1><a href="{{route('employee.index')}}">Header</a></h1>
    </header>
    @yield('content')
    <footer>
      <h5>Footer</h5>
    </footer>

  </body>
</html>
