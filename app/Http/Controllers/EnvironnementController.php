<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvironnementController extends Controller
{
    public function index(){
        return view('environnement');
    }
}
