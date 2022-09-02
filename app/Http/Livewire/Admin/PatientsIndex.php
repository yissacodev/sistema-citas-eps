<?php

namespace App\Http\Livewire\Admin;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientsIndex extends Component
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
        $patients = Patient::where(function($query) {
            return $query->where('name_patient', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('identify_patient', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('email_patient', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('last_patient', 'LIKE' , '%' . $this->search . '%');
        })
        ->where('status_patient', '!=', 0)
        ->paginate();

        return view('livewire.admin.patients-index', compact('patients'));
    }
}
