@extends('layout')
@section('hridoy')
@php
	function convert_department($value){

		$values = [

				1=>'CSE',
				2=>'EEE',
				3=>'CE',
				4=>'BBA',
				5=>'ENG',

		];

		return $values[$value];

	}

@endphp
 
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Student Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}" alt="">
                  <p class="name" style="color: green;font-family: monospace;">{{$student_description_profile->student_name}}</p>
                  <p class="designation">ID: {{$student_description_profile->student_roll}}</p>
                  <a class="number">Cell: {{$student_description_profile->student_phone}}</a>
                  <a class="email" href="#">Email: {{$student_description_profile->student_email}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    
                    <h2 style="color: blue; font-family: cursive; font-weight: bolder;">Bangladesh Army International University of Science & Technology</h2>

                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total description of the student is given below:</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Father's Name:</i>
                      <span style="font-family: Helvetica; font-size: 15px;">{{$student_description_profile->student_fathername}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Mother's Name:</i>
                      <span style="font-family: Helvetica; font-size: 15px;">{{$student_description_profile->student_mothername}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Department:</i>
                      <span style="font-family: Helvetica; font-size: 15px;">
                      	{{convert_department($student_description_profile->student_department)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family: Helvetica; font-size: 15px;">{{$student_description_profile->student_address}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Admission Year:</i>
                      <span style="font-family: Helvetica; font-size: 15px;">{{$student_description_profile->student_admissionyear}}</span>
                    </a>
                     
                  </div>
                </div>
              </div>
            </div>
            
          </div>
       


@endsection