<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ENGController extends Controller
{
  public function eng()
    {
        
       $eng_std_info = DB::table('student_tbl')
        				->where(['student_department' => 5])
        				->get();

        $manage_std = view('admin.eng')
        				->with('eng_std_info',$eng_std_info);
        return view('layout')
        				->with('eng',$manage_std);

         return view('admin.eng');
        
    }
}
