@extends('layouts.auth')
@section('content')
<!-- Page Wrapper -->
<div id="wrapper">
   <!-- Sidebar -->
  <x-header/>
   <!-- End of Sidebar -->
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
         <!-- Topbar -->
         <x-navbar/>
         <!-- End of Topbar -->
         <!-- Begin Page Content -->
         <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Attendance</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
               <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Employee Attendance</h6>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th>Day</th>
                              <th>Punch In</th>
                              <th>Punch Out</th>
                              <th>Earn</th>
                              <th>present</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($attendance as $att)
                           <?php 
                           use Illuminate\Support\Facades\Auth;
                           if (Auth::user()->id == $att['empl_id']) {
                              echo" <tr>
                               <td>".Auth::user()->id."</td>
                               <td >".Auth::user()->name."</td>
                               <td>{$att['date']}</td>
                               <td>{$att['day']}</td>
                              
                               <td>{$att['time']}</td>
                              
                               <td>7PM</td>
                               <td>₹ 500</td>
                               ";
                              if ($att['day'] == "Sunday") {
                                  echo "<td class='text-danger fw-700' >Holiday</td>";
                              } else {
                                  echo" <td  >{$att['radio']}</td>";
                              }
                              ";
                              
                              
                              
                              
                              
                              </tr>";
                              }
                              ?>
                           @endforeach
                        </tbody>
                     </table>
                     <?php 
                     use Illuminate\Support\Facades\DB;
                     if (Auth::user()->id == $att['empl_id']) {
                        $count = DB::table('attendances')
                        ->where('empl_id', Auth::user()->id)
                        ->where('day', '!=', 'Sunday')
                        ->count();
                        $salary = $count*"500";
                        echo'<div class=" d-flex justify-content-center">
                                    <div style="background:#4e73df;width:fit-content" class= " counter m-2 py-0 px-3  text-light  d-flex">
                                    <div class=" my-3 ml-0 mr-3 Tpresents">Total Present:</div>
                                       <div id="totalDay" class=" my-3 ml-0 mr-3 ">'.$count.'</div>
                                    </div>
                                    <br>';
                        
                        $count = DB::table('attendances')
                        ->where('empl_id', Auth::user()->id)
                        ->where('day', 'Sunday')->count();
                        
                        echo'
                        <div style=" width:fit-content" class="counter m-2 py-0 px-3  text-light bg-danger d-flex">
                         <div class=" my-3 ml-0 mr-3 Tpresents">Total Absent:</div>
                           <div id="totalDay" class=" my-3 ml-0 mr-3 ">'.$count.'</div>
                         </div>
                           ';
                        echo'
                         <div style=" width:fit-content" class="counter m-2 py-0 px-3  text-light bg-success d-flex">
                          <div class=" my-3 ml-0 mr-3 Tpresents">Total Earning:</div>
                            <div id="totalDay" class=" my-3 ml-0 mr-3 ">'.$salary.'</div>
                          </div>
                          </div>';
                        }
                           ?>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
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
            <a class="btn btn-primary" href="addemp">Logout</a>
         </div>
      </div>
   </div>
</div>
@endsection