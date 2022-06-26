<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = auth()->user()->id;


        //Acceder a los datos del paciente atraves de su llave foranea id_user
        

        return view('admin.index');
    }

    public function create(){
        return view('admin.create');
    }
    public function register(){
        return view('admin.registrar');
    }
}
