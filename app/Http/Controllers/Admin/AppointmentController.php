<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\BranchOffice;
use App\Models\DoctorOffice;
use App\Models\Medic;
use App\Models\MedicalArea;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;



class AppointmentController extends Controller
{
    private $medicaarea; 

    public function index(){
        return view('admin.appointments.appointment');
    }

    public function register($id){
        $this->medicaarea = MedicalArea::where('id_area',$id)->first();

        $branchoffices = DB::select('SELECT DISTINCT id_branch, name_branch_office 
        FROM
        branch_offices JOIN doctor_offices ON branch_office = id_branch
        WHERE medical_area = ?', [$id]);
        
        return view('admin.appointments.appointment-schedule')
            ->with('medicalarea',$this->medicaarea)
            ->with('branchoffices', $branchoffices);
    }

    public function getMedics($id_branch , $area){
        $medics = Medic::join('doctor_offices','doctor_offices.id_office', '=', 'medics.eps_doctor_office')
                    ->join('branch_offices','branch_offices.id_branch', '=', 'doctor_offices.branch_office')
                    ->select('id_medic', 'name_medic', 'medical_area', 'num_office', 'id_branch')
                    ->where('id_branch', $id_branch)
                    ->where('medical_area', $area)
                    ->get();
        
        echo json_encode($medics);
    }


    public function getDiary($idmedic){
        $diary = Medic::join('appointments', 'appointments.medic', '=', 'medics.id_medic')
                ->select('status_appoint', 'appoint_start_date', 'appoint_start_hour')
                ->where('medics.id_medic', $idmedic)
                ->get();
        /*Restringir solo status = "pendiente" */
        echo json_encode($diary);
    }

    public function create(Request $request){

        /*Si el usuario tiene rol paciente y el campo patient viene vacio
        Buscar el id de paciente con usando el User id
        guardarlo en el campo patient

        Si no es paciente y el campo patient esta ocupado,
        guardarlo normal
        */

        if(Auth::user()->roles->pluck('name')[0] == "User"){

            // $patient = Patient::where('id_user', auth()->id())->first();

            
            $appointment = new Appointment;
            $appointment->patient = auth()->id();
            $appointment->medic = $request->idmedic;
            $appointment->status_appoint = $request->status;
            $appointment->appoint_start_date = $request->date;
            $appointment->appoint_start_hour = $request->hour;
            $appointment->save();

        }




        

        return redirect()->back();
    }

    public function list(){
        return view('admin.list');
    }
}

/*
Seleccionar todos los médicos que trabajen en una sucursal especializada en un área médica
SELECT `id_medic`, `name_medic` FROM `medics` JOIN `doctor_offices` ON `eps_doctor_office` = `num_office` JOIN `branch_offices` ON `branch_office` = `id_branch` WHERE `id_branch` = 1 AND `medical_area` = 2;
*/