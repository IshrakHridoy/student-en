<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CSEController extends Controller
{
    public function cse()
    {
        
       //
        $cse_std_info = DB::table('student_tbl')
        				->where(['student_department' => 1])
        				->get();

        $manage_std = view('admin.cse')
        				->with('cse_std_info',$cse_std_info);
        return view('layout')
        				->with('cse',$manage_std);

         return view('admin.cse');
    }
}
