@extends('layouts.base')

@section('content')
  <div class="employee">
    <a href="{{ route('employee.create') }}">New Employee</a>
    @foreach ($employees as $employee)
      <h3>Dipendente: {{ $employee -> name }} {{ $employee -> lastname }}</h3>
      <p>Lavoro da svolgere:</p>
      <ul>

        @foreach ($employee -> tasks as $task)

          <li>{{ $task -> title }}</li>
        @endforeach
      </ul>


    @endforeach
  </div><br><br>

@endsection
