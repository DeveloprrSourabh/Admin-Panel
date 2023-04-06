<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template-->

    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
  </head>
  <body>
  <div class="in_form">
                  @foreach($users as $edit)
                  <?php
                     $id = $_GET['iniid'];
                  if ($edit['invoicenum']==$id) {
                      echo '
                        <div class="">
                        <div class="heads mb-4 text-center text-dark ">
                            <div class=""><span class="in_headings">Invoice</span></div>
                        </div>
                        <!-- Details start -->
                        <div class="inv_detail">
                            <div class="w_set  container">
                                <!-- Invoice number -->
                                <div style="display:flex;" class=" in_col1">
                                    <div class=""><span class="inv_num">Invoice No.</span></div>
                                    <div class="d-flex inv_number">
                                        <input readonly class="inv_num_detail" value="'.$edit["invoicenum"].'" name="invoicenum" placeholder="Enter invoice Number" type="text"/>
                                        <hr>
                                        <div>
                                        <div class="lates_inv">Latest Invoice No:</div>
                                        <div class="lates_inv">INV100039(Feb 27, 2023)</div>
                     </div>
                                    </div>
                                </div>
                                <!-- Invoice date -->
                                <div class="col-12  in_col1">
                                <div class=""><span class="inv_num">Invoice Date</span></div>
                                    <div class="inv_number">
                                        <input value="'.$edit["invoicedate"].'"  type="text" name="invoicedate" placeholder="Enter Invoice Date" class="  inv_num_detail" />
                                        <hr>
                                    </div>
                                </div>
                                <!-- Due date -->
                                <div class=" in_col1">
                                 <span class="inv_num">Due Date</span>
                                       <span> <input value="'.$edit["duedate"].'"   type="text"  name="duedate" placeholder="Enter Due Date" class=" inv_num_detail" /></span>
                                        <hr>
                                </div>
                            </div>
                        </div>
                        <!-- Details End -->
                     
                        <!-- Bill Start -->
                        <div class="bill_field">
                            <div class="bill-main">
                                <div class="container">
                                    <div
                                        class="d-flex row">
                                        <!-- First box of Business details start -->
                                        <div class="">
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
                                                    <input  value="'.$edit["company"].'"  name="company" class=" b_input" type="text" placeholder="Company">
                                                </div>
                                                <div class="buisness_detail">
                                                    <div class="container">
                                                        <div class="business_title">
                                                            <div class="b_details">Business details</div>
                                                        </div>
                                                        <div class="row mb-5 mr-5">
                                                            <div class="">
                                                                <div class="b_name">Business Name</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="b_namev">
                                                                    <input  value="'.$edit["business"].'"  name="business" placeholder="Enter Business" class=" inv_num_detail" type="text" ></div>
                                                            </div>
                                                        </div>
                     
                                                        <div class="row mb-3 mr-5">
                                                            <div class="">
                                                                <div class="b_name">Adress</div>
                                                            </div>
                                                            <div class="">
                                                            <div class="b_namev">
                                                                <input value="12sasa"  type="text"   name="adress" placeholder="Enter Adress" class=" inv_num_detail" /></div>
                                                            </div>
                                                        </div>
                     
                                                        <div class="row mb-3 mr-5">
                                                            <div class="">
                                                                <div class="b_name">GSTIN</div>
                                                            </div>
                                                            <div class="">
                                                            <div class="b_namev">
                                                                <input value="'.$edit["gstin"].'"   type="text"  name="gstin" placeholder="Enter GSTIN" class=" inv_num_detail" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                     
                                            </div>
                                        </div>
                                        <!-- First box of Business details end -->
                                        <!-- First box of Business details start -->
                                        <div class="">
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
                                                    <input value="'.$edit["billedto"].'"  type="text"   name="billedto" class="  b_input" type="text" placeholder="Select a Client">
                     
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
                                            <input style="width:12px;border:none" value="'.$edit["item"].'"   name="item" class="input_table"  placeholder="Item name (Required)" type="text">
                                        </td>
                                        <td>
                                            <input style="width:12px;border:none" value="'.$edit["gstrate"].'"   name="gstrate" class="input_table" type="text">
                                        </td>
                                        <td>
                                            <input style="width:12px;border:none" value="'.$edit["quantity"].'"   name="quantity" class="input_table" type="text">
                                        </td>
                                        <td>
                                            <input style="width:12px;border:none" value="'.$edit["rate"].'"   name="rate" class="input_table" type="text">
                                        </td>
                                        <td>
                                            <input style="width:12px;border:none" value="'.$edit["amount"].'"   name="amount" class="input_table" type="text">
                                        </td>
                                        <td>
                                            <input style="width:12px;border:none" value="'.$edit["igst"].'"   name="igst" class="input_table" type="text">
                                        </td>
                                        <td>
                                            <input style="width:12px;border:none" value="'.$edit["total"].'"   name="total" class="input_table" type="text">
                                        </td>
                                    </tr>
                     
                     
                                </table>
                            </div>
                        </div>
                     
                        <div class="table_add container">
                            <div style="
                            width: 24rem;
                         " class="row">
                                <div class="">
                              
                                </div>
                                <div class="">
                              
                                </div>
                            </div>
                        </div>
                        <!-- Table-end -->
                        <!-- <div class="twocol">
                            <div class="container bg_ch">
                                <div class="row">
                                    <div class=" Line_add">
                                        <i class="fa-solid fa-plus"></i>
                                        Add New Line
                                    </div>
                                    <div class=" Line_add">
                                        <i class="fa-solid fa-plus"></i>
                                        Add New Group
                                    </div>
                                </div>
                            </div>
                        </div> -->
                     
                        <!-- <div class="last_amount row">
                            <div class=""></div>
                            <div class="amount_start ">
                                <div class=" impr">
                                    <div class=" mb-4 firstrow row text-dark ">
                                        <div class="">Amount</div>
                                        <div class="">1</div>
                                    </div>
                                    <div class=" mb-4 firstrow text-dark  row">
                                        <div class="">IGST</div>
                                        <div class="">0.18 </div>
                                    </div>
                                    <div class="discount mt-2"> <i class="fa-solid fa-regular fa-tag"></i> Add Discounts/Additional </div>
                                    <div class=" d-flex  pt-3 pb-3 justigy-content-between round">
                                        <div class="r_up mr-5 "><i class="fa-solid fa-rotate-right"></i> Round Up</div>
                                        <div class="r_down mr-5"><i class="fa-solid fa-rotate-left"></i> Round Down</div>
                                    </div>
                                    <div class="totalcount mb-2">summarise Total Quantity</div>
                                </div>
                                <hr class="hrlast">
                                <div class="total row">
                                    <div class="inr ">Total (INR)</div>
                                    <div class="inr ">1.18</div>
                     
                                </div>
                            </div>
                        </div> -->
                   
                     
                     </div>
                        ';
                  }
                  ?>
                  @endforeach
               </div>
               
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>