<?php

namespace App\Livewire;

use App\Models\PPMP as PPMPModel;
use Livewire\Component;

class PPMP extends Component
{

    public $load_ppmp = [];
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $ppmpData = PPMPModel::all()->toArray();

        $this->load_ppmp = collect($ppmpData)->map(function ($ppmpData) {
            return new PPMPModel($ppmpData);
        });
    }

    
    public function render()
    {
        return view('livewire.p-p-m-p');
    }
}
