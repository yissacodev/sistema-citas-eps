<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        return view('admin.user');
    }

    public function edit(User $user){

        $roles = Role::all(); /*Recuperar el listado de roles */
        return view('admin.users.edit', compact('user', 'roles')); /*Se le pasa la información del usuario */
    }

    public function update(Request $request, User $user){
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info', 'Se han asignado los roles correctamente');
    }
}
