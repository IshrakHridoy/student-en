<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CEController extends Controller
{
    public function ce()
    {
        
        $ce_std_info = DB::table('student_tbl')
        				->where(['student_department' => 3])
        				->get();

        $manage_std = view('admin.ce')
        				->with('ce_std_info',$ce_std_info);
        return view('layout')
        				->with('ce',$manage_std);

         //return view('admin.cse');
        
    }
}
