<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', TestController::class);

// Route::get('/', function () {
// return 'Welcome to homepage';
// });

Route::get('editNum/{id?}', function ($id=null) {
    return 'Edit your identity = ' . $id;
    //})->where(['id' => '[0-9]+']);
})->whereNumber('id'); //to accept the id in integer form only

Route::get('editName/{name}', function ($name=null) {
    return 'Edit your identity = ' . $name;
})->whereAlpha('name'); //to accept the name in alpha form only

Route::get('edit/{name}/{id?}', function ($name = null,$id =null) {
    return 'Edit your identity = ' . $name .' / id =  ' . $id;
 });//->whereAlpha('name')->whereNumber('id'); //to accept the name in alpha form only and id in integer form only


Route::fallback(fn() => Redirect::to('/'));



