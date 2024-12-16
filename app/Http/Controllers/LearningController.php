<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index(){
        return view('singleton');
    }
    public function page(){
        return view('singleton');
    }
    public function blog(){
        return view('singleton');
    }

}
