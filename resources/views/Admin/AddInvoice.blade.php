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
                     <form id="inv-form" action="{{route('add.invoice')}}" method="post">
                        @csrf
                        <div class="heads mb-4 text-center text-dark ">
                           <div class="in_heading">Invoice</div>
                        </div>
                        <!-- Details start -->
                        <div class="inv_detail">
                           <div
                              class="w_set row container">
                              <!-- Invoice number -->
                              <div class="col-12 in_col1">
                                 <div class="inv_num">Invoice No.</div>
                                 <div class="inv_number">
                                    <input  class="inv_num_detail " name="invoicenum" placeholder="Enter invoice Number" type="text"/>
                                    <br>
                                    <span class=" text-danger invoicenum_err"></span>
                                    <span class="text-danger">
                                    </span>
                                    <hr>
                                    <div class="lates_inv">Latest Invoice No:</div>
                                    <div class="lates_inv">INV100039(Feb 27, 2023)</div>
                                 </div>
                              </div>
                              <!-- Invoice date -->
                              <div class="col-12  in_col1">
                                 <div class="inv_num">Invoice Date</div>
                                 <div class="inv_number">
                                    <input type="date" name="invoicedate" placeholder="Enter Invoice Date" class="inv_num_detail " />
                                    <br>
                                    <span class=" text-danger invoicedate_err"></span>
                                    <span class="text-danger">
                                    </span>
                                    <hr>
                                 </div>
                              </div>
                              <!-- Due date -->
                              <div class="col-12 in_col1">
                                 <div class="inv_num">Due Date</div>
                                 <div class="inv_number">
                                    <input type="date"  name="duedate" placeholder="Enter Due Date" class="inv_num_detail " />
                                    <br>
                                    <span class=" text-danger duedate_err"></span>
                                    <span class="text-danger">
                                    </span>
                                    <hr>
                                 </div>
                              </div>
                              <div class="add_more"><i class="fa-solid fa-plus"></i>  Add More Fields</div>
                           </div>
                        </div>
                        <div class="bill_field">
                           <div class="bill-main">
                              <div class="container">
                                 <div class="row">
                                    <!-- First box of Business details start -->
                                    <div class="col-6">
                                       <div class="containers">
                                          <div class="bill_by">
                                             <span class="f_bill">
                                             Billed By
                                             </span>
                                             <span class="s_bill">
                                             (Your Details)
                                             </span>
                                          </div>
                                          <div class="input_bill">
                                             <input name="company" class="b_input  " type="text" placeholder="Company">
                                             <br>
                                             <span class=" text-danger company_err"></span>    
                                          </div>
                                          <div class="buisness_detail">
                                             <div class="container">
                                                <div class="business_title">
                                                   <div class="b_details">Business details</div>
                                                   <div class="b_edit"><i class="fa-regular fa-pen-to-square"></i> Edit</div>
                                                </div>
                                                <div class="row mb-5 mr-5">
                                                   <div class="col-6">
                                                      <div class="b_name">Business Name</div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="b_namev">
                                                         <input name="business" placeholder="Enter Business" class="inv_num_detail" />
                                                         <br>
                                                         <span class=" text-danger business_err"></span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row mb-3 mr-5">
                                                   <div class="col-6">
                                                      <div class="b_name">Adress</div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="b_namev">
                                                         <input name="adress" placeholder="Enter Adress" class="inv_num_detail " />
                                                         <br>
                                                         <span class=" text-danger adress_err"></span>
                                                         <span class="text-danger">
                                                         </span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row mb-3 mr-5">
                                                   <div class="col-6">
                                                      <div class="b_name">GSTIN</div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="b_namev">
                                                         <input name="gstin" placeholder="Enter GSTIN" class="inv_num_detail " />
                                                         <br>
                                                         <span class=" text-danger gstin_err"></span>
                                                         <span class="text-danger">
                                                         </span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- First box of Business details end -->
                                    <!-- First box of Business details start -->
                                    <div class="col-6">
                                       <div class="containers">
                                          <div class="bill_by">
                                             <span class="f_bill">
                                             Billed To
                                             </span>
                                             <span class="s_bill">
                                             (Client Details)
                                             </span>
                                          </div>
                                          <div class="input_bill">
                                             <input name="billedto" class="b_input  " type="text" placeholder="Select a Client">
                                             <br>
                                             <span class=" text-danger billedto_err"></span>
                                          </div>
                                          <div class="buisness_detail text-center">
                                             <div class="container">
                                                <div class="select_client">
                                                   <div class="options">
                                                      Select a Client/Business from list
                                                   </div>
                                                   <div class="or">Or</div>
                                                   <div id="btn_width" class="btn btn-primary">Add New Client</div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- First box of Business details end -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Bill End -->
                        <!-- Table-start -->
                        <div class="table mt-5 pt-2">
                           <div class="container">
                              <table class="container">
                                 <tr class="head_tr fw-25">
                                    <th>Item</th>
                                    <th>GST Rate</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amount</th>
                                    <th>IGST</th>
                                    <th>Total</th>
                                 </tr>
                                 <tr>
                                    <td>
                                       <input name="item" class="table_input "  placeholder="Item name (Required)" type="text">
                                       <br>
                                       <span class=" text-danger item_err"></span>                                                
                                    </td>
                                    <td>
                                       <input name="gstrate" class="table_input " type="number">
                                       <br>
                                       <span class=" text-danger gstrate_err"></span>    
                                    </td>
                                    <td>
                                       <input name="quantity" class="table_input " type="number">
                                       <br>
                                       <span class=" text-danger quantity_err"></span>    
                                    </td>
                                    <td>
                                       <input name="rate" class="table_input " type="number">
                                       <br>
                                       <span class=" text-danger rate_err"></span>    
                                    </td>
                                    <td>
                                       <input name="amount" class="table_input " type="number">
                                       <br>
                                       <span class=" text-danger amount_err"></span>    
                                    </td>
                                    <td>
                                       <input name="igst" class="table_input " type="number">
                                       <br>
                                       <span class=" text-danger igst_err"></span>    
                                    </td>
                                    <td>
                                       <input name="total" class="table_input " type="number">
                                       <br>
                                       <span class=" text-danger total_err"></span>    
                                    </td>
                                 </tr>
                                 <input value="{{Auth::user()->id}}" type="hidden" class="form-control form-control-user" placeholder="Employee id" id="exampleInputempl_id" name="empl_id">
                              </table>
                           </div>
                        </div>
                        <div class="table_add container">
                           <div style="
                              width: 24rem;
                              " class="row">
                              <div class="col-6">
                                 <i class="fa-solid fa-plus"></i>
                                 Add Description
                              </div>
                              <div class="col-6">
                                 <i class="fa-solid fa-plus"></i>
                                 Add Thumbnail
                              </div>
                           </div>
                        </div>
                        <!-- Table-end -->
                        <!-- <div class="twocol">
                           <div class="container bg_ch">
                               <div class="row">
                                   <div class="col-6 Line_add">
                                       <i class="fa-solid fa-plus"></i>
                                       Add New Line
                                   </div>
                                   <div class="col-6 Line_add">
                                       <i class="fa-solid fa-plus"></i>
                                       Add New Group
                                   </div>
                               </div>
                           </div>
                           </div> -->
                        <!-- <div class="last_amount row">
                           <div class="col-6"></div>
                           <div class="amount_start col-6">
                               <div class=" impr">
                                   <div class=" mb-4 firstrow row text-dark ">
                                       <div class="col-6">Amount</div>
                                       <div class="col-6">1</div>
                                   </div>
                                   <div class=" mb-4 firstrow text-dark  row">
                                       <div class="col-6">IGST</div>
                                       <div class="col-6">0.18 </div>
                                   </div>
                                   <div class="discount mt-2"> <i class="fa-solid fa-regular fa-tag"></i> Add Discounts/Additional </div>
                                   <div class=" d-flex  pt-3 pb-3 justigy-content-between round">
                                       <div class="r_up mr-5 "><i class="fa-solid fa-rotate-right"></i> Round Up</div>
                                       <div class="r_down mr-5"><i class="fa-solid fa-rotate-left"></i> Round Down</div>
                                   </div>
                                   <div class="totalcount mb-2">summarise Total Quantity</div>
                               </div>
                               <hr style="     width: 64%;
                               margin: unset;    margin-left: 12rem;">
                               <div class="total row">
                                   <div class="inr col-6">Total (INR)</div>
                                   <div class="inr col-6">1.18</div>
                           
                               </div>
                           </div>
                           </div> -->
                        <div class="container btn-save my-4  mx-auto">
                           <button id="edibtn" type="submit" class="btn btn_save btn-primary">Save Details</button>
                        </div>
                     </form>
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