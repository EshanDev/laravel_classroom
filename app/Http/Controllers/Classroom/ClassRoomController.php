<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index(){
    	return view('spa');
    }
}
