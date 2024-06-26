<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnergieController extends Controller
{
    public function index(){
        return view('energie');
    }
}
