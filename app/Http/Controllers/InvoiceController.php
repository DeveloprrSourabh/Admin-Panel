<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\PDF;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('Admin.AddInvoice');
    }


    public function indexes()
    {
        $data = DB::select('select * from invoices');

        return view('Admin.UpdateInvoice', ['editin'=>$data]);
    }

    public function addInvoice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'invoicenum'  => 'required',
            'invoicedate'  => 'required',
            'duedate'  => 'required',
            'company'  => 'required',
            'billedto'  => 'required',
            'business'  => 'required',
            'adress'  => 'required',
            'gstin'  => 'required',
            'item'  => 'required' ,
            'gstrate'  => 'required',
            'rate'  => 'required' ,
            'amount'  => 'required' ,
            'igst'  => 'required' ,
            'total'  => 'required' ,
            'empl_id'  => 'required' ,
            'quantity'  => 'required' ,

        ]);
        if ($validator->passes()) {
            $invoicenum = $request->input('invoicenum');
            $invoicedate = $request->input('invoicedate');
            $duedate = $request->input('duedate');
            $company = $request->input('company');
            $billedto =$request->input('billedto');
            $business =$request->input('business');
            $adress =  $request->input('adress');
            $gstin =   $request->input('gstin');
            $item =    $request->input('item');
            $gstrate = $request->input('gstrate');
            $rate =    $request->input('rate');
            $amount =  $request->input('amount');
            $igst =    $request->input('igst');
            $total =   $request->input('total');
            $quantity =   $request->input('quantity');

            $empl_id = $request->input('empl_id');



            $data = Invoice::insert([
                 'invoicenum' => $invoicenum,
                 'invoicedate' => $invoicedate,
                 'duedate' => $duedate,
                 'company' => $company,
                 'billedto' => $billedto,
                 'business' => $business,
                 'adress' => $adress,
                 'gstin' => $gstin,
                 'item' => $item,
                 'gstrate' => $gstrate,
                 'rate' => $rate,
                 'amount' => $amount,
                 'quantity' => $quantity,

                 'igst' => $igst,
                 'total' => $total,
                 'empl_id'=>Auth::user()->id,
            ]);
            return response()->json(['Success'=>'Added New Records']);
        }
        return response()->json(['error'=>$validator->errors()]);


        // $data->save();

        // return redirect('Admin.manageinv');
    }

// For Show Invoice detail

public function invtable()
{
    $data = Invoice::All();
    // echo $data;

    return view('Admin.ManageInvoice', ['invoices'=>$data]);
}
// Edit Invoice Details
public function editinv(Request $request)
{
    $request->validate([
        "invoicenum" => "required",
        "invoicedate" => "required",
        "duedate" => "required",
        "company" => "required",
        "billedto" => "required",
        "business" => "required",
        "adress" => "required",
        "gstin" => "required",
        "item" => "required",
        "gstrate" => "required",
        "quantity" => "required",
        "rate" => "required",
        "amount" => "required",
        "igst" => "required",
        "total" => "required",
    ]);
    // $data = new Invoice();
    // echo $datas;
    // $data = Invoice::get();
    Invoice::where('invoicenum', $request['invoicenum'])
    ->where('empl_id', Auth::user()->id)
    ->update([
        'invoicenum' => $request['invoicenum'],
        'invoicedate' => $request['invoicedate'],
        'duedate' => $request['duedate'],
        'company' => $request['company'],
        'billedto' => $request['billedto'],
        'business' => $request['business'],
        'adress' => $request['adress'],
        'gstin' => $request['gstin'],
        'item' => $request['item'],
        'gstrate' => $request['gstrate'],
        'rate' => $request['rate'],
        'amount' => $request['amount'],
        'quantity' => $request['quantity'],

        'igst' => $request['igst'],
        'total' => $request['total'],
    ]);



    return redirect('Admin.ManageInvoice');
}

public function render(Request $request)
{
    $data = Invoice::All();
    return view('Admin.UpdateInvoice', ['editin'=>$data]);
}


public function generatePDF()
{
    $data = Invoice::All();
    $data=[
        'users'=>$data
    ];
    // return view('mypdf', $data);

    $pdf = PDF::loadView('mypdf', $data);
    return $pdf->download('mypdf.pdf');
}
}
