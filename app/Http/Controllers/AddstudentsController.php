<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AddstudentsController extends Controller
{
    public function addstudent()
    {
        
        return view('admin.addstudent');
        
    }

     public function savestudent(Request $requet)
    {
        
        $data=array();
        $data['student_name']=$requet->student_name;
        $data['student_roll']=$requet->student_roll;
        $data['student_fathername']=$requet->student_fathername;
        $data['student_mothername']=$requet->student_mothername;
        $data['student_email']=$requet->student_email;
        $data['student_phone']=$requet->student_phone;
        $data['student_address']=$requet->student_address;
        $data['student_password']=md5($requet->student_password);
        $data['student_department']=$requet->student_department;
        $data['student_admissionyear']=$requet->student_admissionyear;
        $image=$requet->file('student_image');
        if($image){
        	$image_name = str_random(20);
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name. '.' . $ext;
        	$upload_path='image/';
        	$image_url = $upload_path . $image_full_name;
        	$success = $image->move($upload_path,$image_full_name);
        	if($success){
        		$data['student_image']=$image_url;
        		DB::table('student_tbl')->insert($data);
        		session::put('message','student added successfully!');
        		return Redirect::to('/addstudent');
        	}

        }

          		$data['student_image']=$image_url;
        		DB::table('student_tbl')->insert($data);
        		session::put('message','student added successfully!');
        		return Redirect::to('/addstudent');

        		DB::table('student_tbl')->insert($data);
        		session::put('message','student added successfully!');
        		return Redirect::to('/addstudent');
        
    }
}
