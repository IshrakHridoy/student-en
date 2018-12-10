<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudent()
    {
        
        //return view('admin.allstudent');
        $all_std_info = DB::table('student_tbl')
        				->get();

        $manage_std = view('admin.allstudent')
        				->with('all_std_info',$all_std_info);
        return view('layout')
        				->with('allstudent',$manage_std);
    }

    public function studentdelete($student_id)
    {
    	DB::table('student_tbl')
    			 ->where('student_id',$student_id)
    			 ->delete();

    	return Redirect::to('/allstudent');
    }

    public function studentview($student_id)
    {   	
    	//return view('admin.viewstudent');

    	$student_description_view = DB::table('student_tbl')
    								->select('*')
    								->where('student_id',$student_id)
    								->first();

    	$manage_description_std = view('admin.viewstudent')
    							->with('student_description_profile',$student_description_view);

    		return view('layout')
    				->with('viewstudent',$manage_description_std);
    }

    public function studentedit($student_id)
    {   	
    	

    	$student_description_view = DB::table('student_tbl')
    								->select('*')
    								->where('student_id',$student_id)
    								->first();

    	$manage_description_std = view('admin.editstudent')
    							->with('student_description_profile',$student_description_view);

    		return view('layout')
    				->with('editstudent',$manage_description_std);
    }


    public function studentupdate(Request $request, $student_id)
    {
    	
    	
    	$data = array();
    	$data['student_name'] = $request->student_name;
    	$data['student_roll'] = $request->student_roll;
    	$data['student_fathername'] = $request->student_fathername;
    	$data['student_mothername'] = $request->student_mothername;
    	$data['student_email'] = $request->student_email;
    	$data['student_phone'] = $request->student_phone;
    	$data['student_address'] = $request->student_address;
    	$data['student_password'] = $request->student_password;
    	$data['student_admissionyear'] = $request->student_admissionyear;
    	$data['student_image'] = $request->student_image;
    	$data['student_department'] = $request->student_department;
    	//return $data['student_image'];


    	$udata = DB::table('student_tbl')
    			->where('student_id',$student_id)
    			->update($data);

    	//dd($udata);
    	Session::put('message','student updated successfully!');
        return Redirect::to('/allstudent');
    }
}
