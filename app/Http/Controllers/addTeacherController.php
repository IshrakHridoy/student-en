<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class addTeacherController extends Controller
{
    public function add_teacher()
    {
        
        return view('admin.add_teacher');
        
    }


    //teacher added part here::::

    public function save_teacher(Request $request)
    {
    	$data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_email']=$request->teacher_email;
        $data['teacher_phone']=$request->teacher_phone;
        $data['teacher_address']=$request->teacher_address;
        $data['teacher_department']=$request->teacher_department;
        //return $data;
        
        $image=$request->file('teacher_image');
        if($image){
        	$image_name = str_random(20);
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name. '.' . $ext;
        	$upload_path='image/';
        	$image_url = $upload_path . $image_full_name;
        	$success = $image->move($upload_path,$image_full_name);
        	if($success){
        		$data['teacher_image']=$image_url;
        		DB::table('teacher_tbl')->insert($data);
        		session::put('message','Teacher added successfully!');
        		return Redirect::to('/addT');
        	}

        }

          		$data['teacher_image']=$image_url;
        		DB::table('teacher_tbl')->insert($data);
        		session::put('message','Teacher added successfully!');
        		return Redirect::to('/addT');

        		DB::table('teacher_tbl')->insert($data);
        		session::put('message','Teacher added successfully!');
        		return Redirect::to('/addT');

    }
}
