<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesDetailController extends Controller
{
    public function index(){
        return view('services_details');
    }
}
