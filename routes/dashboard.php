<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('{any}' , function(){
	return view('system.index');
})->where('any', '.*');