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

// Route::get('/', function () {
//     return view('template/layout');
// });

Route::get('/', 'Index@index');

Route::get('news', 'News@index');
Route::get('news/{id}','News@get');

Route::match(['get','post'],'/art', ['uses' => 'News@create','as' => "art"]);

// Route::get('shop',function(){
//     return '<h1>shop</h1>';
// });

// Route::get('cybersport',function(){
//     return '<h1>cybersport</h1>';
// });