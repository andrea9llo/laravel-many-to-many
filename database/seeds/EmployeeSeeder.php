<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;
use App\User;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(Employee::class,50) -> create() -> each(function($employee){
      //   $task = Task::inRandomOrder() -> take(rand(0,5)) -> get();
      //   $employee -> tasks() -> attach($task);

      factory(Employee::class,50) -> make() -> each(function($employee){
        $user = User::inRandomOrder() -> first();
        $employee -> user() -> associate($user);
        $employee -> save();

        $task = Task::inRandomOrder() -> take(rand(0,5)) -> get();
        $employee -> tasks() -> attach($task);
      });
    }
}
