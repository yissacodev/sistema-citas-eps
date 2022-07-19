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
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class MedicController extends Controller
{

    public function index()
    {
        return view('admin.medics.medic')
            ->with('idtypes', IdType::all())
            ->with('branchoffices', BranchOffice::all())
            ->with('medicalareas', MedicalArea::all())
            ->with('departments', Department::all())
            ->with('municipalities', Municipality::all());;
    }

    public function register() {
        return view('admin.medics.medic-register')
            ->with('idtypes', IdType::all())
            ->with('branchoffices', BranchOffice::all())
            ->with('medicalareas', MedicalArea::all())
            ->with('departments', Department::all())
            ->with('municipalities', Municipality::all());
    }

    public function show($id){
        $medic = Medic::where('id_medic', $id)->first();

        $area = Medic::join('branch_offices','branch_offices.id_branch', '=', 'medics.eps_branch_office')
                    ->join('medical_areas', 'medical_areas.id_area', '=', 'branch_offices.medical_area')
                    ->select('name_area','color_area')
                    ->where('id_medic', $id)
                    ->first();

        $office = Medic::join('branch_offices','branch_offices.id_branch', '=', 'medics.eps_branch_office')
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
            ->with('office', $office);
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

            /*Aqui cambiar el 1 por el nombre del área médica */
            // $medic->speciality_medic       = $request->area;
            $medic->eps_branch_office       = $request->branch;
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
        // $medic = Medic::where('id_patient', $id_patient)->first();
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
        // } else {
        notify()->success('Laravel Notify is awesome!');
        // }

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
}
