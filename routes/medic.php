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

/*Rutas del doctor */
Route::controller(AppointmentController::class)->middleware('can:medic')->group(function(){
    Route::get('appointments', 'index'); 
    Route::get('appointments/schedule/{id}', 'schedule'); /* Calendario de citas */
    Route::get('appointments/list', 'list'); /* Lista de citas */ /*Atender*/
    Route::get('appointments/postpone', 'list');  /* Posponer una cita */
    Route::get('appointments/pending', 'list'); /* Citas pendientes */
    Route::get('appointments/losed', 'list'); /* Citas perdidas que ve el doctor*/
    Route::get('history', 'list');  /* Buscar historias del paciente e  imprimir*/
});

