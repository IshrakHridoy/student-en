@extends('layout')
@section('hridoy')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update informations of the student</h2>
                          

                          <form class="forms-sample" method="post"  
                          action="{{URL::to('/student_update',$student_description_profile->student_id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name"  aria-describedby="emailHelp" 
                                  value="{{($student_description_profile->student_name)}}">
                               </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" value="{{($student_description_profile->student_roll)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Department</label>
                                   <select class="form-control p-input" name="student_department">
                                     <option selected value="{{$student_description_profile->student_department}}"></option>
                                     <option value="1">CSE</option>
                                     <option value="2">EEE</option>
                                     <option value="3">CE</option>
                                     <option value="4">BBA</option>
                                     <option value="5">ENG</option>
                                     
                                   </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="  student_fathername" value="{{($student_description_profile->student_fathername)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="  student_mothername" value="{{($student_description_profile->student_mothername)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" value="{{($student_description_profile->student_email)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Password</label>
                                  <input type="text"  class="form-control p-input" name="student_password" value="{{$student_description_profile->student_password}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{($student_description_profile->student_phone)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" value="{{($student_description_profile->student_address)}}">
                              </div>
                               <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      
                                      <input type="text" name="student_image" value="{{$student_description_profile->student_image}}">

                                      
                                      
                                    </div>
                                  </div>
                              </div>
 
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" value="{{($student_description_profile->student_admissionyear)}}">
                              </div>
                              
                               
 
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection