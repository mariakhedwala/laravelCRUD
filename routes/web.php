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

// app()->singleton('twitter', function() {
//     return new \App\Services\Twitter('dsajfhkdshfkdjf');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit'); //edit
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
// Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/completed-tasks/{task}','CompletedTaskController@store');
Route::delete('/completed-tasks/{task}','CompletedTaskController@destroy');

Route::get('/sites', 'SitesController@index');
Route::get('/sites/{site}', 'SitesController@detail');
