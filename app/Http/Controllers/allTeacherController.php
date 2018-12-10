<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class allTeacherController extends Controller
{
    public function all_teacher()
    {
        
        $all_teacher_info = DB::table('teacher_tbl')
        				->get();

        $manage_teacher = view('admin.all_teacher')
        				->with('all_teacher_info',$all_teacher_info);
        return view('layout')
        				->with('all_teacher',$manage_teacher);
        
    }
}
