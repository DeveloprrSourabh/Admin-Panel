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
            <h1 class="h3 mb-2 text-gray-800">Invoice</h1>
      

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Your Invoice</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>Emmployee Id</th>

                                <th>Company</th>
                                <th>GST No.</th>

                                <th>Invoice Date</th>
                                    <th>Due Date</th>
                                    <th>Biiled To</th>
                                    <th>Business</th>
                                    <th>Item</th>
                                    <th>Total</th>
                                    <th>Edit Details</th>
                                    <th>Generate Pdf</th>

                                </tr>
                            </thead>
                            <tfoot>
                                @foreach($invoices as $inv)
                                <?php 
                                // use Illuminate\Support\Facades\Auth;
                                if (Auth::user()->id == $inv['empl_id']) {
                                    echo" <tr>
                               <td>{$inv['empl_id']}</td>

                                <td>{$inv['company']}</td>
                                <td>{$inv['gstin']}</td>
                                <td>{$inv['invoicedate']}</td>
                                    <td>{$inv['duedate']}</td>
                                    <td>{$inv['business']}</td>
                                    <td>{$inv['adress']}</td>
                                    <td>{$inv['item']}</td>
                                    <td>{$inv['total']}</td>
                                    <td> <a class='text-light text-decoration-none' href='renderedit?inid=".$inv['invoicenum']."'><button class='btn btn-success'>Edit Data </button></a></td>
                                    <td> <a class='text-light text-decoration-none' href='mypdf?iniid=".$inv['invoicenum']."'><button class='btn btn-primary'>Generate Pdf </button></a></td>
                                    
                                    </tr>";
                                }
                                ?>
                                @endforeach
                            </tbody>
                        </table>
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