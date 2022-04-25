<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});
// The Frist Method => نقل البيانات من المتحكم الي الفيو
/*Route::get('/about', function () {
    $s1 = 'Welcome To my First Project';
    // return view('about')->with('s1', $s1);
    //  return view('about', ['s1' => $s1]);
    return view('about', compact('s1'));
});*/
// The Second Method => نقل البيانات من الفيو الي المتحكم
Route::get('/about', function () {
    $name = request('name');
    //return view('about')->with('name', $name);
    //return view('about', ['name' => $name]);
    return view('about', compact('name'));
});
// تمرير البيانات من خلال الفورم
Route::post('/store', function () {
    $name = request('name');
    //return view('about')->with('name', $name);
    //return view('about', ['name' => $name]);
    return view('about', compact('name'));
});
// تمرير المصفوفات في لارفل
Route::get('tasks', function () {
    $tasks = [
        'first-task' => 'task 1',
        'second-task' => 'task 2',
        'thrid-task' => 'task 3'
    ];
    //return view('about')->with('tasks', $tasks);
    //return view('about', ['tasks' => $tasks]);
    return view('tasks', compact('tasks'));
});
Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task' => 'task 1',
        'second-task' => 'task 2',
        'third-task' => 'task 3'
    ];
    $task =  $tasks[$id];
    //return view('about')->with('tasks', $tasks);
    //return view('about', ['tasks' => $tasks]);
    return view('show', compact('task'));
});
// التعامل مع قواعد البيانات
Route::get('/contact', [TaskController::class, 'index']);
Route::get('/contact/{id}', [TaskController::class, 'show']);
