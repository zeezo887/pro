<?php

use App\Detail;

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
    return view('landing');
});
Route::get('/facebook', function () {
    return view('home');
});
Route::post('/login', 'SessionController@store');

Route::get('/admin/login', function(){
    return view('admin/login');
} )->name('login');

Route::get('/admin', function() {
    $details = Detail::all();
   return view('admin/home', compact('details'));
})->name('home')->middleware('auth');

Route::post('admin/login', 'Admin\SessionController@store');