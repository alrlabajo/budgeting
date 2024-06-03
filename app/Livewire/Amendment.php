<?php

namespace App\Livewire;

use App\Models\Amendment as AmendmentModel;
use Livewire\Component;

class Amendment extends Component
{
    
    public $load_amendment = [];
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $amendmentData = AmendmentModel::all()->toArray();

        $this->load_amendment = collect($amendmentData)->map(function ($amendmentData) {
            return new AmendmentModel($amendmentData);
        });
    }
   
    public function render()
    {
        return view('livewire.amendment');
    }
}
