
  
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
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet"><ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <ul>    
    <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Employee <sup>2</sup>
            </div>
          </a>
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="home">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading"> Interface </div>
          <!-- Nav Item - Pages Collapse Menu -->
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Attendance</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Attendance:</h6>
                <a class="collapse-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" href="#">Manage Attendance</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title mx-auto" id="offcanvasRightLabel">Attendance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body mx-auto">
                    <div class="container">
                      <!-- Outer Row -->
                      <div class=" justify-content-center">
                        <div class="row">
                          <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                              <!-- Nested Row within Card Body -->
                              <div class="row">
                                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                                <div class="col-lg-12">
                                  <div style="padding:4rem; width:21rem">
                                    <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">Add Attendance</h1>
                                    </div>
                                    <form class="user" action="{{route('attend.employee')}}" method="POST" enctype="multipart/form-data">
                                @csrf   
                                      <div class="form-group">
                                        <input name="date" type="date" class="form-control form-control-user" id="exampleInputDate" aria-describedby="datelHelp" placeholder="Enter date">
                                      </div>
                                      
                                      <div class="form-group">
                                        <input showMeridian: false type="time" class="form-control form-control-user" placeholder="Enter Time" id="exampleInputTime" name="time">
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" class="form-control form-control-user" placeholder="Employee id" id="exampleInputempl_id" name="empl_id">
                                      </div>
                                      <div class="form-group">
                                        <select value="day" name="day" id="cars">
                                          <option name="day"  value="Sunday">Sunday</option>
                                          <option name="day"  value="Monday">Monday</option>
                                          <option name="day"  value="Tuesday">Tuesday</option>
                                          <option name="day"  value="Wednesday">Wednesday</option>
                                          <option name="day"  value="Thursday">Thursday</option>
                                          <option name="day"  value="Friday">Friday</option>
                                          <option name="day"  value="Saturday">Saturday</option>

                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Present">
                                          <label class="form-check-label" for="inlineRadio2">Mark as Present</label>
                                        </div>
                                      </div>
                                      <button class="btn btn-primary btn-user btn-block"> Submit </button>
                                      <hr>
                                    </form>
                                    <hr>
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
                <a class="collapse-item" href="attendance">View Attendance</a>
              </div>
            </div>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading"> Addons </div>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login">Login</a>
                <a class="collapse-item" href="register">Register</a>
                <a class="collapse-item" href="password/reset">Forgot Password</a>
                <div class="collapse-divider"></div>
              </div>
            </div>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>
        </body>

</html>