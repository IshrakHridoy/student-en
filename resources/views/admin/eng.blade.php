@extends('layout')
@section('hridoy')
	<div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Std ID #</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($eng_std_info as $v_std)
                      <tr>
                          <td>{{$v_std->student_roll}}</td>
                          <td>{{$v_std->student_name}}</td>
                          <td>{{$v_std->student_phone}}</td>
                          <td><img src="{{asset('/'.$v_std->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_std->student_address}}</td>
                          <td>
                          	@if($v_std->student_department == 1)
                          		<span class="label label-success">{{'CSE'}}</span>
                          	@elseif($v_std->student_department == 2)
                          		<span class="label label-primary">{{'EEE'}}</span>
                          	@elseif($v_std->student_department == 3)
                          		<span class="label label-warning">{{'CE'}}</span>
                          	@elseif($v_std->student_department == 4)
                          		<span class="label label-success">{{'BBA'}}</span>
                          	@elseif($v_std->student_department == 5)
                          		<span class="label label-danger">{{'ENG'}}</span>
                          	@else
                          		<span class="label label-danger">{{'Not Defined'}}</span>
                          	@endif
                          </td>
                           
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
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