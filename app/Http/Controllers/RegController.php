<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function registrar()
    {
        
        return view('admin.registrar');
        
    }
}
