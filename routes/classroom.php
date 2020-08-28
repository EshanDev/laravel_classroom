<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::get('/{any?}', 'ClassroomController@index')->where('any', '.*');


Route::resource('/', 'ClassRoomController', [
	'names' => [
		'index' => 'classroom',
		'store' => 'classroom.test',
	]
]);

Route::get('/user/profile', 'ClassRoomController@ProFile')->name('classroom.user.profile');

