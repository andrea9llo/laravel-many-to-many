<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use Illuminate\Http\Request;

class MyController extends Controller
{
  public function removeTaskFromEmpl($ide, $idt)
  {
    $employee = Employee::findOrFail($ide);
    $task = Task::findOrFail($idt);

    $employee -> tasks() -> detach($task);
    return redirect() -> route('employee.index');
  }

  public function showTask($idt,$ide)
  {
    $task = Task::findOrFail($idt);
    $employee = Employee::findOrFail($ide);
    return view('pages.show-task', compact('task','employee'));
  }
}
