@extends('layouts.app')
@section('content')
   <!-- Outer Row -->
   <div style="padding-top:0px!important" ></a</div>  <div id="wrapper">
        <!-- Sidebar -->
        <x-header/> 
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
            <x-navbar/>
<div class="container ">
   <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
         <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                  <div class="col-lg-6">
                     <div class="p-5">
                        <div class="text-center">
                           <h1 class="h4 text-gray-900 mb-4">Add Employee!</h1>
                        </div>
                        
@foreach($employees as $emp)
                        <?php
                        $id = $_GET['empid'];

                        if ($id == $emp['id']) {
                            echo'
                                <form id="update-employee" class="user" action="'.route("edit.employee").'" method="POST" enctype="multipart/form-data">
                               '. @csrf_field()  .' 
                                <div class="form-group">
                                   <input hidden readonly value="'.$emp['id'].'" name="id" type="name" class="form-control form-control-user" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                <input  value="'.$emp['name'].'" name="name" type="name" class="form-control form-control-user" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name">
                             </div>
                                <div class="form-group">
                                   <input value="'.$emp['email'].'"  name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enater Email Adress...">
                                </div>
                                <div class="form-group">
                                   <input value="'.$emp['designation'].'"  name="designation" type="designation" class="form-control form-control-user" id="exampleInputDesignation" placeholder="Enater Designation Adress...">
                                </div>
                                <div class="form-group">
                                   <input value="'.$emp['adress'].'"   name="adress" type="adress" class="form-control form-control-user" id="exampleInputAdress" placeholder="Enater Adress...">
                                </div>
                                <button id="editbtns" type="button" class="btn btn_save btn-primary">Save Details</button>
                                <hr>
                             </form>
                                ';
                        }
                        ?>
                        @endforeach
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
</div>
</div>

@endsection






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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <span class="text-danger">
      </span>
   <body>
      <div
         id="wrapper">
         <!-- Sidebar -->
        <x-header/>
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
               <div class="in_form">
                  <div class="container">
                  @foreach($employees as $emp)

                                 <?php

                                 echo'
                                 <form id="update-employee" class="user" action="'.route("edit.employee").'" method="POST" enctype="multipart/form-data">
                                 '. @csrf_field()  .' 
                              <div class="heads mb-4 text-center text-dark ">
                                 <div class="in_heading">Invoice</div>
                              </div>
                              <!-- Details start -->
                              <div class="inv_detail">
                                 <div
                                 <div class="form-group">
                                 <input hidden readonly value="'.$emp['id'].'" name="id" type="name" class="form-control form-control-user" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name">
                              </div>
                                    class="w_set row container">
                                    <!-- Invoice number -->
                                    <div class="col-12 in_col1">
                                       <div class="inv_num">Name:</div>
                                       <div class="inv_number">
                                          <input  class="inv_num_detail "   value="'.$emp['name'].'"  name="name" placeholder="Enter Name" type="text"/>
                                          <br>
                                          <span class=" text-danger invoicenum_err"></span>
                                          <span class="text-danger">
                                          </span>
                                          <hr>
                              
                                       </div>
                                    </div>
                                    <!-- Invoice date -->
                                    <div class="col-12  in_col1">
                                       <div class="inv_num">Email</div>
                                       <div class="inv_number">
                                          <input type="email" name="email"   value="'.$emp['email'].'"   placeholder="Enter Email" class="inv_num_detail " />
                                          <br>
                                          <span class=" text-danger invoicedate_err"></span>
                                          <span class="text-danger">
                                          </span>
                                          <hr>
                                       </div>
                                    </div>
                                    <!-- Due date -->
                                    <div class="col-12 in_col1">
                                       <div class="inv_num">designation</div>
                                       <div class="inv_number">
                                          <input type="text"  value="'.$emp['designation'].'"    name="designation" placeholder="Enter designation" class="inv_num_detail " />
                                          <br>
                                          <span class=" text-danger duedate_err"></span>
                                          <span class="text-danger">
                                          </span>
                                          <hr>
                                       </div>
                                    </div>
                                    <div class="col-12 in_col1">
                                       <div class="inv_num">Adress</div>
                                       <div class="inv_number">
                                          <input type="text"   value="'.$emp['adress'].'"   name="adress" placeholder="Enter Adress" class="inv_num_detail " />
                                          <br>
                                          <span class=" text-danger duedate_err"></span>
                                          <span class="text-danger">
                                          </span>
                                          <hr>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="container btn-save my-4  mx-auto">
                              <button id="editbtns" type="button" class="btn btn_save btn-primary">Save Details</button>
                              </div>
                           </form>
                                 ';
                                    ?>

                                 @endforeach

                 
                  </div>
               </div>
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
       
   </body>
   </div>
   <!-- new form end -->
   </div>
   </div>
   </div>
   </div>
   </div>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script><script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Custom scripts for all pages--><script src="js/sb-admin-2.min.js"></script>
   <!-- Page level plugins --><script src="vendor/chart.js/Chart.min.js"></script>
   <!-- Page level custom scripts --><script src="js/demo/chart-area-demo.js"></script>
   <script src="js/demo/chart-pie-demo.js"></script>
   <script src="js/forms/Form-submit.js"></script>

</body>
</html>