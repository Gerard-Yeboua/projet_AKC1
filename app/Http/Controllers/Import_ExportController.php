<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Import_ExportController extends Controller
{
    public function index(){
        return view('import_export');
    }
}
