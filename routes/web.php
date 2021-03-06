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

Route::get('/', function () {
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('ckeditor-demo',function(){
       return view('ckeditor.index');
});



Route::resource('list1s', 'list1Controller');


Route::resource('child01s', 'Child01Controller');

Route::resource('child02s', 'Child02Controller');

Route::resource('child03s', 'Child03Controller');
