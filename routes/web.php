<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* Perfil de usuario */
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');

Route::middleware(['auth:sanctum', 'verified'])->get('', [HomeController::class, 'index'])->name('dashboard');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

