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

Route::controller(AppointmentController::class)->middleware('can:user')->prefix('appointments')->group(function(){
    Route::get('','index'); 
    Route::get('/register/{id}', 'register'); 
    Route::get('/list', 'list'); 
    Route::get('/postpone', 'list'); 
    Route::get('/cancel', 'list');
    Route::get('/pending', 'list');
    Route::get('/losed', 'list');
    Route::get('/history', 'history');
    Route::get('/authorizations', [AuthorizationsController::class, 'index']);

    /*Rutas de ajax */
    Route::get('register/getmedics/{id}/{area}', 'getMedics')->name('user.appoints.getmedics');
    Route::get('register/getdiary/{id}', 'getDiary')->name('user.appoints.getdiary');
    Route::get('getdays/{id}', 'getdays')->name('user.appoints.getdays');
    Route::post('register/create', 'create')->name('user.appoints.create');

    // ruta cancelar cita
    Route::put('delete/{id}', 'cancelAppointment')->name('user.appoints.delete');
});

