<?php

namespace App\Http\Livewire\Admin;

use App\Models\MedicalArea;
use Livewire\Component;
use Livewire\WithPagination;

class MedicalAreasIndex extends Component
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
        $medicalareas = MedicalArea::where('id_area', 'LIKE', '%' . $this->search . '%')
            ->orWhere('name_area', 'LIKE', '%' . $this->search . '%')
            ->orWhere('specialist_area', 'LIKE', '%' . $this->search . '%')
            ->paginate();
        return view('livewire.admin.medical-areas-index', compact('medicalareas'));
    }
}
