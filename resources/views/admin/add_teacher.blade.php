@extends('layout')
@section('hridoy')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements of a teacher</h2>
                          <p class="alert-success"> <?php
                $message=Session::get('message');
                if($message)
                    echo "Teacher's Information Added Successfully!!!";
                    Session::put('message',null)
                
                ?></p>

                          <form class="forms-sample" method="post"  
                          action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher's Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name"  aria-describedby="emailHelp" placeholder="Enter Teacher Name">
                               </div>
                                
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher's Email</label>
                                  <input type="email" class="form-control p-input" name="teacher_email" placeholder="Enter Teacher's Email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone" placeholder="Enter Phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" placeholder="Enter Address">
                              </div>
                               
                              <div class="form-group">
                                  <label for="exampleInputPassword1"> Teacher's Department</label>
                                   <select class="form-control p-input" name="teacher_department">
                                     <option value="1">CSE</option>
                                     <option value="2">EEE</option>
                                     <option value="3">CE</option>
                                     <option value="4">BBA</option>
                                     <option value="5">ENG</option>
                                   </select>
                              </div>
                               
                              
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Select an image</label>
                                      <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>
                               
                              <button type="submit" class="btn btn-success btn-block">Add Teacher</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection