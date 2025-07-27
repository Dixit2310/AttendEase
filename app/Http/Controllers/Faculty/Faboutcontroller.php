<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Faboutcontroller extends Controller
{
    public function index(){
        return view('Faculty.about');
    }
}
