<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEEController extends Controller
{
   public function eee()
    {
        
       $eee_std_info = DB::table('student_tbl')
        				->where(['student_department' => 2])
        				->get();

        $manage_std = view('admin.eee')
        				->with('eee_std_info',$eee_std_info);
        return view('layout')
        				->with('eee',$manage_std);

         return view('admin.eee');
        
    }
}
