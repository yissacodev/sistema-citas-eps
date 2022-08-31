<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\AuthorizationsController;
use App\Http\Controllers\Admin\MedicalAreaController;
use App\Http\Controllers\Admin\MedicController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\SpecializationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Models\Patient;

Route::get('/', [HomeController::class, 'index']); 

/* Rutas del admin
    Ver una portada
    Sacar citas de todo tipo
    Ver citas de todos los usuarios por doctor
    Aplazar citas
    Cancelar citas de todos los usuarios
    Listar citasde todos los usuarios por doctor
    Ver, buscar e imprimir las historias clinicas por paciente
    autorizar citas
*/

Route::controller(AppointmentController::class)->middleware('can:admin')->prefix('appointments')->group(function(){
    Route::get('',  'index'); 
    Route::get('/register/{id}', 'register');
    Route::get('/postpone',  'list');
    Route::get('/cancel',  'list');
    Route::get('/userlist',  'list');
    Route::get('/mediclist',  'list');
    Route::get('/authorizations', [AuthorizationsController::class, 'index']); /*Autorizaciones */

    /*Rutas de ajax */
    Route::get('register/getmedics/{id}/{area}', 'getMedics')->name('admin.appoints.getmedics');
    Route::get('register/getdiary/{id}', 'getDiary')->name('admin.appoints.getdiary');
    Route::get('register/getdays/{id}', 'getdays')->name('admin.appoints.getdays');
    Route::post('register/create', 'create')->name('admin.appoints.create');
});
Route::get('history', [AppointmentController::class, 'list']); /*Historias clinicas por paciente */




/* Rutas para registrar usuario. Solo el administrador de todo el sistema puede hacerlo*/
Route::controller(PatientController::class)->prefix('patient')->group(function(){
    Route::get('', 'index')->name('admin.patients');
    Route::get('register', 'register')->name('admin.patients.register');
    Route::post('create', 'create')->name('admin.patient.create');
    Route::get('show/{id}', 'show')->name('admin.patients.show');
    Route::get('edit/{id}', 'edit')->name('admin.patients.edit');
    Route::delete('delete/{id}', 'deletePatient')->name('admin.patients.delete');
    Route::put('edit/{id}', 'putEdit');
});

/* Rutas para registrar medico. Solo el administrador de todo el sistema puede hacerlo*/
Route::controller(MedicController::class)->middleware('can:admin')->prefix('medic')->group(function(){
    Route::get('', 'index')->name('admin.medics');
    Route::get('register', 'register')->name('admin.medics.register');
    Route::post('create', 'create')->name('admin.medic.create');
    Route::get('show/{id}', 'show')->name('admin.medics.show');
    Route::get('edit/{id}', 'edit')->name('admin.medics.edit');
    Route::delete('delete/{id}', 'deletemedic')->name('admin.medics.delete');
    Route::put('edit/{id}', 'putEdit');

    Route::get('getmunicipalities/{id}', 'getmunicipalities')->name('admin.medics.getmunicipalities');
    Route::get('getbranchoffices/{id}', 'getbranchoffices')->name('admin.medics.getbranchoffices');
    Route::get('getidentification/{idtype}/{idnum}', 'getidentification')->name('admin.medics.getidentification');
});

/* Rutas para registrar areas medicas. Solo el administrador de todo el sistema puede hacerlo*/
Route::controller(MedicalAreaController::class)->middleware('can:admin')->prefix('specializations')->group(function(){
    Route::get('', 'index')->name('admin.specializations');
    Route::get('register', 'register')->name('admin.specializations.register');
    Route::post('create', 'create')->name('admin.specializations.create');
    Route::put('delete/{id}', 'putDelete')->name('admin.specializations.delete');
});








Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('users/update/{user}', [UserController::class, 'update'])->name('admin.users.update');

Route::get('doctor', [UserController::class, 'index']);

Route::get('authorizations', [AuthorizationsController::class, 'index']);