<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AdminController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }
    //viewProfile here
    public function viewprofile()
    {
        return view('admin.viewP');
    }
    //setting here
    public function setting()
    {
        return view('admin.setting');
    }
    public function dashboard(Request $request)
    {
       //return view('admin.dashboard');
       $email= $request->email;
       $password=md5($request->pass);
       //return $email." ".$password;
       $result=DB::table('admin_tbl')
       ->where('admin_email',$email)
       ->where('admin_password',$password)
       ->first();
    

        if($result){
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
            return view('admin.dashboard');
        }
        else{
            Session::put('exception','Email or Password invalid');
            return Redirect::to('/backend');
        }
    }

    public function login_dashboard(Request $request)
    {
        
        return "You are Login";
        
    }
    
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);

        return Redirect::to('/backend');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
