<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Apoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function viewAppoinment(){
        return view('backend.appoinment.index',['appoinment' => Apoinment::all()]);
    }

    public function destroyMessage(int $id){
        $msg = Apoinment::find($id);
            $msg->delete();
            return back()->with('notification','Appoinment deleted successfully');
    }
}
