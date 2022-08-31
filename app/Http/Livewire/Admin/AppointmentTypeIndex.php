<?php

namespace App\Http\Livewire\Admin;

use App\Models\MedicalArea;
use Livewire\Component;
use Livewire\WithPagination;


class AppointmentTypeIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = "bootstrap";

    /*Actualizar la información de la ruta final de busqueda de la pagina */
    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        /*$medicalareas = MedicalArea::where('name_area', 'LIKE', '%' . $this->search . '%')
            ->paginate();
        */
        $medicalareas = MedicalArea::where(function($query) {
            return $query->where('name_area', 'like', '%'.$this->search.'%');
        })
        ->where('status', '!=', 0)
        ->paginate();

        return view('livewire.admin.appointment-type-index', compact('medicalareas'));
    }
}
