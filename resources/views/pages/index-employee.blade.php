@extends('layouts.base')

@section('content')
  <div class="employee">
    <a href="{{ route('employee.create') }}">New Employee</a>
    <h2>Dipendenti:</h2>
    @foreach ($employees as $employee)
      <h3> {{ $employee -> name }} {{ $employee -> lastname }}</h3>
      <h4>Lavoro da svolgere:</h4>
      <ul>

        @foreach ($employee -> tasks as $task)

          <li>
            <a href="{{ route('employee.remove.task', [$employee -> id, $task -> id]) }}">x</a>
            <a href="{{ route('task.show', [$task-> id, $employee -> id]) }}">{{ $task -> title }}</a>
          </li>
        @endforeach
        <a href="{{ route('employee.edit', $employee -> id) }}">Edit</a>
        <a href="{{ route('employee.delete', $employee -> id) }}">Delete</a>
      </ul>


    @endforeach
  </div><br><br>

@endsection
