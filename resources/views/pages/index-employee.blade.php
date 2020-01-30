@extends('layouts.base')

@section('content')
  <div class="employee">
    @auth

      <a href="{{ route('employee.create') }}">New Employee</a>
    @endauth
    <h2>Dipendenti:</h2>
    @foreach ($employees as $employee)
      <h3> {{ $employee -> name }} {{ $employee -> lastname }}</h3>
      <h4>Lavoro da svolgere:</h4>
      <ul>

        @foreach ($employee -> tasks as $task)

          <li>
            @auth
              @if (Auth::user() -> id == $employee -> user -> id)
                <a href="{{ route('employee.remove.task', [$employee -> id, $task -> id]) }}">x</a>
              @endif

            @endauth
            <a href="{{ route('task.show', [$task-> id, $employee -> id]) }}">{{ $task -> title }}</a>
          </li>
        @endforeach
        @auth
          @if (Auth::user() -> id == $employee -> user -> id)
            <a href="{{ route('employee.edit', $employee -> id) }}">Edit</a>
            <a href="{{ route('employee.delete', $employee -> id) }}">Delete</a>
          @endif

        @endauth
      </ul>
      <p>Datore lavoro <b>{{ $employee -> user -> name }}</b> </p>

      <hr>
    @endforeach
  </div><br><br>

@endsection
