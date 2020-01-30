<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

  public function saveImg(Request $request)
  {

    $file = $request -> file('image');
    $filename = $file -> getClientOriginalName();

    $file -> move('image', $filename);

    $newUserData = [

      'image' => $filename

    ];

    Auth::user() -> update($newUserData);
    return redirect() -> route('employee.index');


  }
}
