<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.doctor.index', ['doctors' => Doctor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.doctor.create', ['department' => Department::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $request->validate(
     [
                'name' => 'required | max:30',
                'image' => 'image | mimes:jpg,png',
                'designition' => 'required',
                'department_id' => 'required',
                'phone'=>'reuired | numeric | max:11'
            ],
            
 [
                'name.required' => 'Please give a Doctor name',
                'designition.required' => 'please give a doctor designition',
                'department_id.required' => 'choice the department',
                'image.mimes' =>'image type must be jpg and png formate',
                'phone.numeric' => 'only input the positive number'
            ]
        );
 */

        $doctors              = new Doctor();
        $doctors->department_id = $request->department_id;
        $doctors->name        = $request->name;
        $doctors->designition = $request->designition;
        $doctors->description = $request->description;
        $doctors->phone       = $request->phone;
        $image                = $request->image;
        if ($image) {
            $imageName  = 'doctors-img' . time() . rand() . '.' . $image->extension();
            $directory = 'doctors-img/';
            $image->move($directory, $imageName);
            $doctors->image = $directory . $imageName;
        }
        $doctors->save();
        return to_route('createdoctor')->with('notification', 'New Doctor  Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $doctor = Doctor::where('id', $id)->first();
        return view('backend.doctor.edit', ['doctor' => $doctor,'department'=>Department::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $doctors              = Doctor::find($id);
        $doctors->department_id = $request->department_id;
        $doctors->name        = $request->name;
        $doctors->designition = $request->designition;
        $doctors->description = $request->description;
        $doctors->phone       = $request->phone;
        $image                = $request->image;

        if ($image) {
            if (file_exists($doctors->image)) {
                unlink($doctors->image);
            }
            $imageName  = 'doctors-img' . time() . rand() . '.' . $image->extension();
            $directory = 'doctors-img/';
            $image->move($directory, $imageName);
            $doctors->image = $directory . $imageName;
        }
        $doctors->save();
        return to_route('indexdoctor')->with('notification', 'Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $doctor = Doctor::find($id);
        if ($doctor->image) {
            if (file_exists($doctor->image)) {
                unlink($doctor->image);
            }
        }
        $doctor->delete();
        return to_route('indexdoctor')->with('notification', 'Doctor Deleted Successfully');
    }
}
