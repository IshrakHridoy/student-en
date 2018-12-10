@extends('layout')
@section('hridoy')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements of a student</h2>
                          <p class="alert-success"> <?php
                $message=Session::get('message');
                if($message)
                    echo "Student's Information Added Successfully!!!";
                    Session::put('message',null)
                
                ?></p>

                          <form class="forms-sample" method="post"  
                          action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name"  aria-describedby="emailHelp" placeholder="Enter Student Name">
                               </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Roll</label>
                                  <input type="text" class="form-control p-input" name="  student_roll" placeholder="Enter Roll">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="  student_fathername" placeholder="Enter Father's Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="  student_mothername" placeholder="Enter Mother's Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student's Email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" placeholder="Enter Address">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Password">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Department</label>
                                   <select class="form-control p-input" name="student_department">
                                     <option value="1">CSE</option>
                                     <option value="2">EEE</option>
                                     <option value="3">CE</option>
                                     <option value="4">BBA</option>
                                     <option value="5">ENG</option>
                                   </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Admission Year">
                              </div>
                              
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Select an image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea">Any Query? Feel free</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" rows="3"></textarea>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection