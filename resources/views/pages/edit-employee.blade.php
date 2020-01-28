@extends('layouts.base')

@section('content')

  <form  action="{{ route('employee.update', $employee -> id ) }}" method="post">
    @csrf
    @method('POST')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $employee -> name }}"><br>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value="{{ $employee -> lastname }}"><br>
    <select  name="tasks[]" multiple>

      @foreach ($tasks as $task)
        <option value="{{ $task -> id }}" @if ($employee -> tasks() -> find($task -> id))
          selected
        @endif>{{ $task -> title }}</option>

      @endforeach
    </select><br><br>
    <input type="submit" name="submit" value="UPDATE">
  </form>

@endsection
