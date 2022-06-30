<?php

namespace App\Http\Controllers\Admin;
// namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\IdType;
use App\Models\Municipality;
use App\Models\Patient;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class PatientController extends Controller
{

    public function index()
    {
        return view('admin.patients.patients')
            ->with('idtypes', IdType::all())
            ->with('departments', Department::all())
            ->with('municipalities', Municipality::all());
    }

    /*Eliminar la vista de registrar y hacer todo en una ventana modal*/
    public function register() {
        return view('admin.patients.patient-register')
            ->with('idtypes', IdType::all())
            ->with('departments', Department::all())
            ->with('municipalities', Municipality::all());
    }

    public function show($id)
    {
        $patient = Patient::where('id_patient', $id)->first();

        $idtype = Idtype::where('id_type', $patient->idtype)->first()->name_type;
        $department = Department::where('id_department', $patient->department_patient)->first()->department_name;
        $municipality = Municipality::where('id_municipality', $patient->municipality_patient)->first()->municipality_name;
        
        $user = User::where('id', $patient->id_user)->first();

        return view('admin.patients.patient-show')
            ->with('patient', $patient)
            ->with('department', $department)
            ->with('municipality', $municipality)
            ->with('idtype', $idtype)
            ->with('user', $user);
    }

    public function create(Request $request)
    {
        $patient = new Patient;

        /*Si el paciente tiene numero de identificaicion y correo distinto */
        if (
            !Patient::where('identify_patient', '=', $request->idnumber)->first() &&
            !User::where('email', '=', $request->email)->first()
        ) {
            $patient->idtype =           $request->idtype;
            $patient->identify_patient = $request->idnumber;
            $patient->name_patient =     $request->name;
            $patient->last_patient =     $request->last;
            $patient->genre_patient =    $request->sex;
            $patient->birth_patient =    $request->birth;
            $patient->social_strat_patient = $request->stratrum;

            $dep_found = Department::where('department_name', '=', $request->department)->first();
            $patient->department_patient = $dep_found->id_department;

            $mun_found = Municipality::where('municipality_name', '=', $request->municipality)->first();
            $patient->municipality_patient = $mun_found->id_municipality;

            $patient->neigh_patient        = $request->neigh;
            $patient->id_user = '200';
            $patient->home_address_patient = $request->address;
            $patient->email_patient        = $request->email;
            $patient->cel_patient          = $request->cel;
            $patient->tel_patient          = $request->tel;
            $patient->status_patient       = true;
            $patient->desc_patient         = $request->desc;
            $patient->save();

            $user = new User();
            $user->name = strtolower($request->name);
            $user->email = $request->email;
            $user->password = bcrypt($request->idnumber); /*Pass N° de identificación */
            $user->save();

            $user->roles()->sync('2');
            notify()->success('Laravel Notify is awesome!'); /*Notificacion de aprobación */
            return view('admin.patients.patients');
        } else {
            notify()->success('Laravel Notify is awesome!');
        }
    }

    public function edit($id){
        $patient = Patient::where('id_patient', $id)->first();
        $department = Department::where('id_department', $patient->department_patient)->first()->department_name;
        $municipality = Municipality::where('id_municipality', $patient->municipality_patient)->first()->municipality_name;
        return view('admin.patients.patient-edit')
            ->with('patient', $patient)
            ->with('idtypes', IdType::all())
            ->with('departments', Department::all())
            ->with('municipalities', Municipality::all())
            ->with('department', $department)
            ->with('municipality', $municipality);
    }

    public function putEdit(Request $request, $id_patient){
        // $patient = Patient::where('id_patient', $id_patient)->first();
        $patient = Patient::findOrFail($id_patient);

        $user = User::where('email', $request->email)->first();
        $user->email = $request->email;
        $user->save();

        // if (!User::where('email', '=', $request->email)->first()) {
        $patient->idtype =           $request->idtype;
        $patient->identify_patient = $request->idnumber;
        $patient->name_patient =     $request->name;
        $patient->last_patient =     $request->last;
        $patient->genre_patient =    $request->sex;
        $patient->birth_patient =    $request->birth;
        $patient->social_strat_patient = $request->stratrum;

        $dep_found = Department::where('department_name', '=', $request->department)->first();
        $patient->department_patient = $dep_found->id_department;

        $mun_found = Municipality::where('municipality_name', '=', $request->municipality)->first();
        $patient->municipality_patient = $mun_found->id_municipality;

        $patient->neigh_patient        = $request->neigh;
        $patient->home_address_patient = $request->address;
        $patient->email_patient        = $request->email;
        $patient->cel_patient          = $request->cel;
        $patient->tel_patient          = $request->tel;
        $patient->status_patient       = true;
        $patient->desc_patient         = $request->desc;
        $patient->save();

        return view('admin.patients.patients');
        // } else {
        notify()->success('Laravel Notify is awesome!');
        // }

    }

    public function deletePatient(Request $request, $id_patient){
        $patient = Patient::findOrFail($id_patient);
        
        if($patient->id_patient){
			$user = User::where('email', $patient->email_patient)->first();
            $user->delete();
			$patient->delete();
            return view('admin.patients.patients');
        }
    }
}
