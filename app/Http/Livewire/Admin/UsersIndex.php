<?php

namespace App\Http\Livewire\Admin;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;
class UsersIndex extends Component
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
        $patients = Patient::where('name_patient', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('identify_patient', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('email_patient', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('last_patient', 'LIKE' , '%' . $this->search . '%')
                        // ->orWhere('last_patient', 'LIKE' , '%' . $this->search . '%')
                        ->paginate();
        return view('livewire.admin.users-index', compact('patients'));
    }

    public function patientShow($patient){
        
        return view('admin.patient-show');
    }
}
