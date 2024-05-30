<?php

namespace App\Livewire;

use App\Models\Mooe as MooeModel; // Import the Mooe model
use Livewire\Component;

class Mooe extends Component
{
    public $load_mooe;
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $mooesData = MooeModel::all()->toArray();

        $this->load_mooe = collect($mooesData)->map(function ($mooeData) {
            return new MooeModel($mooeData);
        });
    }

    public function render()
    {
        return view('livewire.mooe');
    }
}