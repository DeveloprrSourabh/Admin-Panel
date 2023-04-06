<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_user != "Employee") {
            return redirect('login');
        } else {
            $data = Attendance::all();
            return view('viewattendance', ['attendance'=>$data]);
        }
    }
    public function attend(Request $request)
    {
        $radio = $request->input('radio');
        $date = $request->input('date');
        $time = $request->input('time');
        $empl_id = $request->input('empl_id');
        $day = $request->input('day');


        $data = Attendance::insert([
            'radio'=>$radio,
            'date'=>$date,
            'time'=>$time,
            'day'=>$day,
            'empl_id'=>Auth::user()->id,

        ]);
        if (!Auth::user()) {
            return redirect("Admin.home")->withSuccess(' You attended Successfully');
        }else{
            $data = Attendance::all();

            return view('Admin.ViewAttendance', ['attendance'=>$data]);
        }

        
    }

public function attenTable()
{
    if (!Auth::user()) {
        return redirect('login');
    }else{
    $data = Attendance::all();

        return view('Admin.ViewAttendance', ['attendance'=>$data]);
    }
    
}

public function show()
{
    return DB::table('users')
    ->join('attendances', 'users.emp_id', "=", 'attendances.empl_id')
    ->get();
}
}
