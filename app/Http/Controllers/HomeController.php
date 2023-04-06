<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Attendance::select('id', 'date')->get()->groupBy(function ($data) {
           return  Carbon::parse($data->date)->format('M');
        });

        $months = [];
        $monthCount = [];

        foreach($data as $month =>$values)
        {
            $months[]=$month;
            $monthCount[]=count($values);

        }
        return view('Admin.home',['data'=>$data, 'months'=>$months, 'monthCount'=>$monthCount]);
        
    }
    public function userHome()
    {
        return view('Employee.homes');
    }
}
