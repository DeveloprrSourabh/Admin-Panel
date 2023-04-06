<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        if (!Auth::user()) {
            return redirect("login")->withSuccess('You have signed-in');
        } else {
            return redirect('AddEmployee');
        }
    }

    public function indextable()
    {
        if (!Auth::user()) {
            return redirect("login")->withSuccess('You have signed-in');
        } else {
            return view('Admin.ManageEmployee');
        }
    }
    public function addEmp(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $designation = $request->input('designation');
        $adress = $request->input('adress');

        $data = Employee::insert([
            'name'=>$name,
            'email'=>$email,
            'designation'=>$designation,
            'adress'=>$adress

        ]);

        return redirect("manageemp")->withSuccess('You have signed-in');
    }

    public function table()
    {
        $data = Employee::all();

        if (!Auth::user()) {
            return redirect("login")->withSuccess('You have signed-in');
        } else {
            return view('Admin.ManageEmployee', ['employee'=>$data]);
        }
    }

public function getdetail()
{
    $data = Employee::all();
    return view('Admin.updateEmployee', ['employees'=>$data]);
}

    public function editEmp(Request $request)
    {
        $request->validate([
            // 'id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'designation'=>'required',
            'adress'=>'required',
        ]);

        Employee::where('id', $request['id'])
        ->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'designation'=>$request['designation'],
            'adress'=>$request['adress'],
        ]);
    }
}
