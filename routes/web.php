<?php

use Illuminate\Support\Facades\Hash;
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
    return view('auth.login');
})->middleware('guest');



Route::get('reportes', function () {
    return view('dashboard.amcomsa');
})->middleware('auth');

Route::get('colombiamovil', function () {
    return view('dashboard.colombia-movil');
})->middleware('auth');




//Rutas de Login
Route::resource('login','LogController');
Route::get('logout','LogController@Logout');

//Route::get('create-users', function () {
//    $user = new \App\User();
//
//    $user->name='CESAR ALONSO BOBADILLA GAZABON';
//    $user->username='80794278';
//    $user->password= Hash::make('4278');
//    $user->active="1";
//
//    $user->save();

//    $users = \App\User::all();
//
//    foreach ($users as $user){
//        $user->password = Hash::make($user->password);
//        $user->save();
//    }
//});