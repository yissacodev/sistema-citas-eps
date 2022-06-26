<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalArea;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('admin.appointments.appointment')->with('este', intval('65'));
    }

    public function register($id){
        $medicaarea = MedicalArea::where('id_area',$id)->first();
        return view('admin.appointments.appointment-register')
            ->with('medicalarea',$medicaarea);
        
    }

    public function list(){
        return view('admin.list');
    }

}
