<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Faccountcontroller extends Controller
{
    public function index(){
        return view('Faculty.account');
    }
}
