<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() { return redirect() -> route('employee.index'); });

Route::get('/employee' , 'EmployeeController@index') -> name('employee.index');
Route::get('/employee/create' , 'EmployeeController@create') -> name('employee.create');
Route::post('/employee/store' , 'EmployeeController@store') -> name('employee.store');
Route::get('/employee/{id}/edit' , 'EmployeeController@edit') -> name('employee.edit');
Route::post('/employee/{id}/update' , 'EmployeeController@update') -> name('employee.update');
Route::get('/employee/{id}/delete' , 'EmployeeController@destroy') -> name('employee.delete');

Route::get('/employee/{ide}/remove/task/{idt}' , 'MyController@removeTaskFromEmpl') -> name('employee.remove.task');
Route::get('/task/{idt}/show/employee/{ide}' , 'MyController@showTask') -> name('task.show');

Auth::routes();

Route::post('/user/image/set', 'MyController@saveImg')->name('user.image');
