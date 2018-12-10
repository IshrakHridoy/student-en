<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BAIUST operation</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/admin/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/admin/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/admin/images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
   
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('index.html')}}"><img src="images/img-01.png" alt="hhhh"  height="64" width="50"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
           
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">3</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('/viewprofile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                   
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/setting')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Settings</p>
                   
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                   
                </div>
              </a>
               
               
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="{{URL::to('http://via.placeholder.com/47x47')}}" alt="">
            </div>
            <div class="details">
              <p class="user-name">BAIUST  </p>
              <p class="designation">APP</p>
            </div>
          </div>
          <ul class="nav">
            <!--222222main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">My Menus</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/allstudent')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/addstudent')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/tutionfee')}}">Tution Fee</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/result')}}">Result</a>
                  </li>
                   
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Departments</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/cse')}}">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/eee')}}">EEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/ce')}}">CE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/bba')}}">BBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/eng')}}">ENG</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
        
              
            <!--forms start-->
            < 
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Faculty</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/addT')}}">Add Teacher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/allT')}}">All Teacher</a>
                  </li>
                   
 
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#validationSubmenu" aria-expanded="false" aria-controls="validationSubmenu">
                <i class="mdi mdi-flag-outline menu-icon"></i>
                <span class="menu-title">Admin Block</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="validationSubmenu">

                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/vc')}}">VC</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/registrar')}}">Registrar</a>
                  </li>
                </ul>
              </div>
            </li>
             
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            @yield('hridoy')
          </div>
           

           
           
        
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Developed By- Ishrak Hridoy</a> &copy; 2018
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
    <!-- End plugin js for this page-->
 <script src="{{asset('admin/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
 <script src="{{asset('/admin/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
 <script src="{{asset('/admin/js/data-table.js')}}"></script>
  <!-- Plugin js for this page-->
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('/admin/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('/admin/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('/admin/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('/admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

  <!-- inject:js -->
  <script src="{{asset('/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/admin/js/misc.js')}}"></script>
  <script src="{{asset('/admin/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/admin/js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->

  <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>

    <script>
    
        $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you sure to delete this?", function (confirmed) {
             if(confirmed){
              window.location.href = link;
             };
        });
    });
  </script>

</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
