<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link
        rel="stylesheet" href="css/style.css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <body>
            <div
                id="wrapper">
                <!-- Sidebar -->
                <ul
                    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                    </a>
                    <!-- Divider -->
                    <hr
                    class="sidebar-divider my-0">
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <a class="nav-link" href="home">
                             <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Divider -->
                    <hr
                    class="sidebar-divider">
                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Interface
                    </div>
                    <!-- Nav Item - Pages Collapse Menu -->
                    <?php
                    use Illuminate\Support\Facades\Auth;

                    if (Auth::user()->is_user == "Admin") {
                        echo' <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Employees</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Employees:</h6>
                <a class="collapse-item" href="addemp">Add Employees</a>
                <a class="collapse-item" href="manageemp">Manage Employee</a>
              </div>
            </div>
          </li>';
                    } else {
                        echo' <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Attendance</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Attendance:</h6>
            <a class="collapse-item" href="viewattendance">View Attendance</a>
          </div>
        </div>
      </li>';
                    }
                    ?>
               
                    

                    <!-- Divider -->
                    <hr
                    class="sidebar-divider d-none d-md-block">
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                </ul>
                <!-- End of Sidebar -->
                <!-- Content Wrapper -->
                <div
                    id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div
                        id="content">
                        <!-- Topbar -->
                        <x-navbar/>
                        <!-- End of Topbar -->
                        <div class="container-xl px-4 mt-4">
                            <div class="rows">
                                <div
                                    class="colxl4 mx-auto">
                                    <!-- Profile picture card-->
                                    <div class="card mb-4 mb-xl-0">
                                        <div class="card-header">Profile Picture</div>
                                        <div class="card-body text-center">
                                            <form action="{{ route('image.store') }}" method="POST" id="image-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <img class="inputimage"  src="/images/{{ Auth::user()->avatar }}" id="preview-image">
                                                    <input type="file" name="image" id="avatar" class="form-control">
                                                    <span class="text-danger" id="image-input-error"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="button" class="btn btn-success update">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="colxl">
                                    <div class="card mb-4">
                                        <div class="card-header">Account Details</div>
                                        <div class="card-body">
                                          <div class="container">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                    <li>
                                                        {{$error}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif @if(session()->get('message'))
                                            <div class="alert alert-success" role="alert">
                                                <strong>Success:
                                                </strong>
                                                {{session()->get('message')}}
                                            </div>
                                            @endif
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">{{Auth::user()->name}}'s Profile</div>
                                                        <div class="card-body">
                                                            @if (session('status'))
                                                            <div class="alert alert-success" role="alert">
                                                                {{ session('status') }}
                                                            </div>
                                                            @endif @if($message = Session::get('success'))
                                                            <div class="alert alert-success">
                                                                <p>{{$message}}</p>
                                                            </div>
                                                            @endif
                                                            <form class="my-5" id="update-form" action="{{route('image.profile')}}" method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="name">
                                                                        <strong>Name:</strong>
                                                                    </label>
                                                                    <input type="text " class="form-control name" id="name" name="name" value="{{Auth::user()->name}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">
                                                                        <strong>Email:</strong>
                                                                    </label>
                                                                    <input type="text" class="form-control name" id="email" value="{{Auth::user()->email}}" name="email">
                                                                </div>
                                                              
                                                                <button id="submit" type='button' class="btn btn-primary">Update Profile</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        <div class="container">
                                          @if ($errors->any())
                                          <div class="alert alert-danger">
                                              <ul>
                                                  @foreach($errors->all() as $error)
                                                  <li>
                                                      {{$error}}
                                                  </li>
                                                  @endforeach
                                              </ul>
                                          </div>
                                          @endif @if(session()->get('message'))
                                          <div class="alert alert-success" role="alert">
                                              <strong>Success:
                                              </strong>
                                              {{session()->get('message')}}
                                          </div>
                                          @endif
                                          <div class="row justify-content-center">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-header">Change Password</div>
                                                      <div class="card-body">
                                                          @if (session('status'))
                                                          <div class="alert alert-success" role="alert">
                                                              {{ session('status') }}
                                                          </div>
                                                          @endif @if($message = Session::get('success'))
                                                          <div class="alert alert-success">
                                                              <p>{{$message}}</p>
                                                          </div>
                                                          @endif
                                                          <form class="my-5" action="{{route('user.pass')}}" id="update-password" method="post"> 
                                                            @csrf
                                                            <div class="form-group">
                                                              <label for="passwrd">
                                                                <strong>Password:</strong>
                                                              </label>
                            
                                                              <input  class="form-control pass" type="" id="password" placeholder="Enter old password" value="" name="password">
                                                              <label class="my-3" for="npassword">
                                                                <strong>New Password:</strong>
                                                              </label>
                                                              
                                                              <input  class="form-control pass" type="" id="cpassword" placeholder="Enter New password" name="New-password">
                                                            </div>
                                                            <button id="submit" type='button' class="btn btn-primary">Update Password</button>
                            
                                                          </form>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                    <!-- Footer -->
                    <x-footer/>
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </head>
</html></div><!-- new form end --></div></div></div></div></div><!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="{{ asset('js/forms/Form-submit.js')}}"></script>
</body></html>
