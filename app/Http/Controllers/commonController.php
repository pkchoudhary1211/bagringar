<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commonController extends Controller
{
    public function userLogin(){
        return view('login');
    }
}
