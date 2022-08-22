<?php

namespace App\Http\Controllers\Admin;
// namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\BranchOffice;
use App\Models\Department;
use App\Models\IdType;
use App\Models\Medic;
use App\Models\MedicalArea;
use App\Models\Municipality;
use App\Models\Patient;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class MedicController extends Controller
{

    private $idTypes, $medicalAreas, $departments;
    
    public function __construct(){
        $this->idTypes = IdType::all();
        $this->medicalAreas =  MedicalArea::all();
        $this->departments = Department::all();
    }

    public function index()
    {
        return view('admin.medics.medic')
            ->with('idtypes', $this->idTypes)
            ->with('medicalareas', $this->medicalAreas)
            ->with('departments', $this->departments);
    }

    public function register() {
        return view('admin.medics.medic-register')
            ->with('idtypes', $this->idTypes)
            ->with('branchoffices', BranchOffice::all())
            ->with('medicalareas', $this->medicalAreas)
            ->with('departments', $this->departments)
            ->with('municipalities', Municipality::all());
    }

    public function show($id){
        $medic = Medic::where('id_medic', $id)->first();

        $doctoroffice = Medic::join('doctor_offices','doctor_offices.id_office', '=', 'medics.eps_doctor_office')
                    ->select('id_office', 'num_office')
                    ->where('id_medic', $id)
                    ->first();

        $area = Medic::join('doctor_offices','doctor_offices.id_office', '=', 'medics.eps_doctor_office')
                    ->join('medical_areas', 'medical_areas.id_area', '=', 'doctor_offices.medical_area')
                    ->select('name_area','color_area')
                    ->where('id_medic', $id)
                    ->first();

        $office = Medic::join('doctor_offices','doctor_offices.id_office', '=', 'medics.eps_doctor_office')
                    ->join('branch_offices','branch_offices.id_branch', '=', 'doctor_offices.branch_office')
                    ->where('id_medic', $id)
                    ->first();
        // $user = User::where('email', $medic->email_medic)->first();
        $user = User::where('id', $medic->id_user)->first();

        $idtype = Idtype::where('id_type', $medic->idtype)->first()->name_type;
        $department = Department::where('id_department', $medic->department_medic)->first()->department_name;
        $municipality = Municipality::where('id_municipality', $medic->municipality_medic)->first()->municipality_name;

        return view('admin.medics.medic-show')
            ->with('user', $user)
            ->with('medic', $medic)
            ->with('department', $department)
            ->with('municipality', $municipality)
            ->with('idtype', $idtype)
            ->with('area', $area)
            ->with('office', $office)
            ->with('doctoroffice', $doctoroffice);
    }

    public function create(Request $request)
    {
        $medic = new Medic;

        /*Si el paciente tiene numero de identificaicion y correo distinto */
        if (
            !Medic::where('identify_medic', '=', $request->idnumber)->first() &&
            !User::where('email', '=', $request->email)->first()
        ) {
            $user = new User();
            $user->name = strtolower($request->name);
            $user->email = $request->email;
            $user->password = bcrypt($request->idnumber); /*Pass N° de identificación */
            $user->save();

            $user->roles()->sync('2');

            $user = User::where('email', $request->email)->first();
        
            $medic->id_user = $user->id;
            $medic->idtype =           $request->idtype;
            $medic->identify_medic = $request->idnumber;
            $medic->name_medic =     $request->name;
            $medic->last_medic =     $request->last;
            $medic->genre_medic =    $request->sex;
            $medic->birth_medic =    $request->birth;
            $medic->social_strat_medic = $request->stratrum;
            $medic->department_medic = $request->department;
            $medic->municipality_medic = $request->municipality;
            $medic->neigh_medic        = $request->neigh;
            $medic->home_address_medic = $request->address;
            $medic->email_medic        = $request->email;
            $medic->cel_medic          = $request->cel;
            $medic->tel_medic          = $request->tel;
            $medic->status_medic       = true;
            $medic->eps_doctor_office  = $request->eps_doctor_office;
            $medic->desc_medic         = $request->desc;
            $medic->save();

            
            return redirect()->back()->with('add', 'ok');
        } else {
            return 'Cuenta ya existe';
        }
    }

    public function edit($id){
        $medic = Medic::where('id_medic', $id)->first();
        $department = Department::where('id_department', $medic->department_medic)->first()->department_name;
        $municipality = Municipality::where('id_municipality', $medic->municipality_medic)->first()->municipality_name;
        return view('admin.medics.medic-edit')
            ->with('medic', $medic)
            ->with('branchoffices', BranchOffice::all())
            ->with('medicalareas', MedicalArea::all())
            ->with('idtypes', IdType::all())
            ->with('departments', Department::all())
            ->with('municipalities', Municipality::all())
            ->with('department', $department)
            ->with('municipality', $municipality);
    }

    public function putEdit(Request $request, $id_medic){
        $medic = Medic::findOrFail($id_medic);

        $user = User::where('email', $request->email)->first();
        $user->email = $request->email;
        $user->save();

        // if (!User::where('email', '=', $request->email)->first()) {
        $medic->idtype =           $request->idtype;
        $medic->identify_medic = $request->idnumber;
        $medic->name_medic =     $request->name;
        $medic->last_medic =     $request->last;
        $medic->genre_medic =    $request->sex;
        $medic->birth_medic =    $request->birth;
        $medic->social_strat_medic = $request->stratrum;

        $dep_found = Department::where('department_name', '=', $request->department)->first();
        $medic->department_medic = $dep_found->id_department;

        $mun_found = Municipality::where('municipality_name', '=', $request->municipality)->first();
        $medic->municipality_medic = $mun_found->id_municipality;

        $medic->neigh_medic        = $request->neigh;
        $medic->home_address_medic = $request->address;
        $medic->email_medic        = $request->email;
        $medic->cel_medic          = $request->cel;
        $medic->tel_medic          = $request->tel;
        $medic->status_medic       = true;
        $medic->speciality_medic       = $request->area;
        $medic->eps_branch_office       = $request->branch;
        $medic->desc_medic         = $request->desc;
        $medic->save();

        return view('admin.medics.medic');
    }

    public function deleteMedic(Request $request, $id_medic){
        $medic = Medic::findOrFail($id_medic);
        
        if($medic->id_medic){
			$user = User::where('email', $medic->email_medic)->first();
            $user->delete();
			$medic->delete();
            return redirect()->back()->with('delete', 'ok');
        }

    }

    public function getMunicipalities($id){
        $municipatilies = DB::select('SELECT id_municipality, municipality_name FROM municipalities WHERE department = ?', [$id]);
        echo json_encode($municipatilies);
    }

    public function getbranchoffices($id){
        /*Distinct hace tomar el último elemento del array devuelto en consulta*/
        $branchoffices = DB::select('SELECT DISTINCT id_branch, name_branch_office 
        FROM
        doctor_offices JOIN medical_areas ON medical_area = id_area
        JOIN branch_offices ON branch_office = id_branch
        WHERE medical_area = ?', [$id]);
        echo json_encode($branchoffices);
    }

    public function getidentification($idtype, $idnum){
        $hasMedic = DB::table('medics')
                    ->where('idtype', '=', $idtype)
                    ->where('identify_medic', '=', $idnum)
                    ->get();
        echo json_encode($hasMedic);
    }
    
}
