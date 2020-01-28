<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class,50) -> create() -> each(function($employee){
        $task = Task::inRandomOrder() -> take(rand(0,5)) -> get();
        $employee -> tasks() -> attach($task); 
      });
    }
}
