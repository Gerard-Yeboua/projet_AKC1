<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Travaux_publicController extends Controller
{
    public function index(){
        return view('travaux_public');
    }
}
