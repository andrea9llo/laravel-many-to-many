@extends('layouts.base')

@section('content')

  <div class="employee">
        <h3>{{ $employee -> name }} {{ $employee -> lastname }}</h3>
      <h4>Lavoro da svolgere:</h4>
      <ul>

          <li>
            {{ $task -> title }}
          </li>
          <li>
            {{ $task -> description }}
          </li>

      </ul>


  </div><br><br>

@endsection
