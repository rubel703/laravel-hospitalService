<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Apoinment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index', ['department' => Department::all(), 'doctor' => Doctor::all()]);
    }
    public function about()
    {
        return view('frontend.about.index', ['department' => Department::all(), 'doctor' => Doctor::all()]);
    }
    public function service()
    {
        return view('frontend.service.index', ['department' => Department::all(), 'doctor' => Doctor::all()]);
    }
    public function contact()
    {
        return view('frontend.contact.index', ['department' => Department::all(), 'doctor' => Doctor::all()]);
    }

    public function store(Request $request)
    {
        $appoinment               = new Apoinment();
        $appoinment->dept_name    = $request->dept_name;
        $appoinment->doctor_name  = $request->doctor_name;
        $appoinment->date         = $request->date;
        $appoinment->time         = $request->time;
        $appoinment->name         = $request->name;
        $appoinment->phone        = $request->phone;
        $appoinment->message      = $request->message;
        $appoinment->save();

        return back()->with('notification', 'Your Appoinment Successfully Submitted.');
    }
}
