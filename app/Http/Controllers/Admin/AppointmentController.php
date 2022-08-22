<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchOffice;
use App\Models\DoctorOffice;
use App\Models\Medic;
use App\Models\MedicalArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                    ->select('id_medic', 'name_medic')
                    ->where('id_branch', $id_branch)
                    ->where('medical_area', $area)
                    ->get();

        // $medics = DB::select('SELECT id_medic, name_medic, name_branch_office 
        // FROM medics JOIN doctor_offices ON eps_doctor_office = id_office 
        // JOIN branch_offices ON branch_office = id_branch 
        // WHERE id_branch = ? AND medical_area = ?', [[$id_branch], [$this->medicaarea->id_area]]);
        
        echo json_encode($medics);
    }

    public function list(){
        return view('admin.list');
    }

    public function getDiary($idmedic){
        $diary = Medic::join('appointments', 'appointments.medic', '=', 'medics.id_medic')
                ->select('status_appoint', 'appoint_start_date', 'appoint_end_date', 'appoint_start_hour', 'appoint_end_hour')
                ->where('medics.id_medic', $idmedic)
                ->get();
        /*Restringir solo status = "pendiente" */
        echo json_encode($diary);
    }
}

/*
Seleccionar todos los médicos que trabajen en una sucursal especializada en un área médica
SELECT `id_medic`, `name_medic` FROM `medics` JOIN `doctor_offices` ON `eps_doctor_office` = `num_office` JOIN `branch_offices` ON `branch_office` = `id_branch` WHERE `id_branch` = 1 AND `medical_area` = 2;
*/