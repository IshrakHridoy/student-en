<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{
    public function bba()
    {
        $bba_std_info = DB::table('student_tbl')
        				->where(['student_department' => 4])
        				->get();

        $manage_std = view('admin.bba')
        				->with('bba_std_info',$bba_std_info);
        return view('layout')
        				->with('bba',$manage_std);

          
        //return view('admin.bba');
        
    }
}
