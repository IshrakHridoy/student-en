@extends('layout')
@section('hridoy')
	    <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <p class="alert-success"> <?php
                $message=Session::get('message');
                if($message)
                    echo "Teacher's Information Updated Successfully!!!";
                    Session::put('message',null)
                
                ?></p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                           
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($all_teacher_info as $v_teacher)
                      <tr>
                          <td>{{$v_teacher->teacher_name}}</td>
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          <td><img src="{{asset('/'.$v_teacher->teacher_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          <td>
                          	@if($v_teacher->teacher_department == 1)
                          		<span class="label label-success">{{'CSE'}}</span>
                          	@elseif($v_teacher->teacher_department == 2)
                          		<span class="label label-primary">{{'EEE'}}</span>
                          	@elseif($v_teacher->teacher_department == 3)
                          		<span class="label label-warning">{{'CE'}}</span>
                          	@elseif($v_teacher->teacher_department == 4)
                          		<span class="label label-success">{{'BBA'}}</span>
                          	@elseif($v_teacher->teacher_department == 5)
                          		<span class="label label-danger">{{'ENG'}}</span>
                          	@else
                          		<span class="label label-danger">{{'Not Defined'}}</span>
                          </td>
                           @endif
                          <td>
                            <a href="{{URL::to('' )}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('' )}}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{URL::to('')}}" id="delete">
                              <button class="btn btn-outline-danger ">Delete</button></a>

                          </td>
                      </tr>
                    @endforeach
                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection