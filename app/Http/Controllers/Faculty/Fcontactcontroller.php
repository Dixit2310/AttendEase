<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fcontactcontroller extends Controller
{
    public function index(){
        return view('Faculty.contact');
    }
}
