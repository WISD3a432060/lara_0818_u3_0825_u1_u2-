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
    return view('welcome');
    \App\Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
        ]);     
    \App\Post::destroy(2);
    \App\Post::destroy(3,5,7);    
});


