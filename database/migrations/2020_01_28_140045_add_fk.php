<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('employee_task', function (Blueprint $table) {
        $table -> bigInteger('employee_id') -> unsigned() -> index();
        $table -> foreign('employee_id', 'employee_task_employees') -> references('id') -> on('employees');
        $table -> bigInteger('task_id') -> unsigned() -> index();
        $table -> foreign('task_id', 'employee_task_tasks') -> references('id') -> on('tasks');

      });

      Schema::table('employees', function (Blueprint $table) {
        $table -> bigInteger('user_id') -> unsigned() -> index();
        $table -> foreign('user_id', 'employee_user_id') -> references('id') -> on('users');
      });

      Schema::table('user_infos', function (Blueprint $table) {
        $table -> bigInteger('user_id') -> unsigned() -> index();
        $table -> foreign('user_id', 'user_infos_user_id') -> references('id') -> on('users');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employee_task', function (Blueprint $table) {
        $table -> dropForeign('employee_task_employees');
        $table -> dropForeign('employee_task_tasks');
        $table -> dropColumn('employee_id');
        $table -> dropColumn('task_id');
      });
      Schema::table('employees', function (Blueprint $table) {
        $table -> dropForeign('employee_user_id');
        $table -> dropColumn('user_id');
      });
      Schema::table('user_infos', function (Blueprint $table) {
        $table -> dropForeign('user_infos_user_id');
        $table -> dropColumn('user_id');
      });
    }
}
