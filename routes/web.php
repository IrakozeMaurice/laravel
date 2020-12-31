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

use App\Http\Controllers\ProjectTasksController;
use App\Services\Twitter;
use Illuminate\Support\Facades\Route;

app()->singleton('twitter', function () {
    return new Twitter('alksflaf');
});

Route::get('/', function () {
    dd(app('App\Example'), app('twitter'), app('twitter'));
});

Route::resource('projects', 'ProjectsController');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
