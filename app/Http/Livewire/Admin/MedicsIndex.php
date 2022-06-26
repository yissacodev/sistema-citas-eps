<?php

namespace App\Http\Livewire\Admin;

use App\Models\Medic;
use Livewire\Component;
use Livewire\WithPagination;

class MedicsIndex extends Component
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
        $medics = Medic::where('name_medic', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('identify_medic', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('last_medic', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('email_medic', 'LIKE' , '%' . $this->search . '%')
                        ->paginate();
        return view('livewire.admin.medics-index', compact('medics'));
    }
}
