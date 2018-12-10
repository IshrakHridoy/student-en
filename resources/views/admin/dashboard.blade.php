@extends('layout')
@section('hridoy')
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Students</h2>

                  @php
                    $studd = DB::table('student_tbl')
                            ->count('student_id');
                  @endphp
                  <p style="font-family: cursive;font-size: 25px;text-align: 
                  center; color: blue;">{{$studd}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teachers</h2>
                  @php
                    $t = DB::table('teacher_tbl')
                            ->count('teacher_id');
                  @endphp
                  <p style="font-family: cursive;font-size: 25px;text-align: 
                  center; color: green;">{{$t}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution Fees</h2>
                  <p style="font-family: cursive;font-size: 20px;text-align: 
                  center; color: violet;">Monthly Fee: 12000tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                   
                <a href="#" class="card-title" class="btn btn-outline-secondary" style="font-family: cursive;font-size: 20px;text-align: 
                  center; color: blue;">Apply Online !</a>
                 
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>


            <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class=" "></i><p class="mb-0">Department of Computer Science & Engineering</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"> <p class="mb-0">Department of Electrical & Electronics Engineering</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class=""></i><p class="mb-0">Department of Civil Engineering</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p >Department of Business Administration</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class=""></i><p class="mb-0">Department of English</p></div>
                    </div>
                  </div>
                </div>
                 
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Available Seats</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">CSE</p>
                        <p class="reference-url">URL :<a href="#">www.baiust.cse.edu</a></p>
                      </div>
                      <p class="ticket-number ml-auto" style="font-weight: bolder; color: black;">#18</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$752.63</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>Admission Deadline</small>
                        <small class="value">Monday, 2.00pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards btn-primary">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">EEE</p>
                        <p class="reference-url">URL :<a href="#">eee.baiust.edu</a></p>
                      </div>
                      <p class="ticket-number ml-auto" style="font-weight: bolder; color: black;">#10</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$752.63</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>Admission Deadline</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards btn-secondary">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">CE</p>
                        <p class="reference-url">URL :<a href="#">ce.baiust.edu</a></p>
                      </div>
                      <p class="ticket-number ml-auto" style="font-weight: bolder; color: black;">#20</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$752.63</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>Admission Deadline</small>
                        <small class="value">Monday, 1.30pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>BAIUST</h2>
                      <p>We began our journey at 2015..................</p>
                      <a href="#" class="btn btn-outline-secondary">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection