<?php

namespace App\Http\Controllers\Admin;

use App\Models\MedicalArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\File;

use Illuminate\Support\Facades\Storage;

class MedicalAreaController extends Controller
{
    public function index()
    {
        return view('admin.medical-areas.medical-areas');
    }

    public function register(){
        return view('admin.medical-areas.medical-areas-register');
    }

    public function create(Request $request){
        $medicararea = new MedicalArea();

        $medicararea->name_area =           $request->namespecial;
        $medicararea->specialist_area = $request->specialist;
        $medicararea->color_area =     $request->color;
        $medicararea->desc_area =     $request->desc;
        
        $request->validate([
            'icon' => 'required|image|max:1024'
        ]);
        $icon = $request->file('icon')->store('public/areaicons');
        $url = Storage::url($icon);
        $medicararea->icon_area = $url;
        $medicararea->status = 1;

        $medicararea->save();

        return view('admin.medical-areas.medical-areas');
    }

    public function putDelete(Request $request, $id_area)
    {
        $medicararea = MedicalArea::findOrFail($id_area);

        $medicararea->status = 0;
        $medicararea->save();

        return redirect()->back()->with('delete', 'ok');
    }
}
