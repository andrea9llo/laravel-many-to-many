@extends('layouts.base')

@section('content')
  <div class="employee">
    <a href="{{ route('employee.create') }}">New Employee</a>
    @foreach ($employees as $employee)
      <h3>Dipendente: {{ $employee -> name }} {{ $employee -> lastname }}</h3>
      <p>Lavoro da svolgere:</p>
      <ul>

        @foreach ($employee -> tasks as $task)

          <li>
            <a href="{{ route('employee.remove.task', [$employee -> id, $task -> id]) }}">x</a>
            {{-- <a href="{{ route('task.show', $task-> id) }}">{{ $task -> title }}</a> --}}
            {{ $task -> title }}: {{ $task -> description }}
          </li>
        @endforeach
        <a href="{{ route('employee.edit', $employee -> id) }}">Edit</a>
        <a href="{{ route('employee.delete', $employee -> id) }}">Delete</a>
      </ul>


    @endforeach
  </div><br><br>

@endsection
