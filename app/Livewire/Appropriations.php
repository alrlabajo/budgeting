<?php

namespace App\Livewire;

use App\Models\Appropriations as AppropriationsModel;
use Livewire\Component;

class Appropriations extends Component
{
    
    public $load_appropriations = [];
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $appropriationsData = AppropriationsModel::all()->toArray();

        $this->load_appropriations = collect($appropriationsData)->map(function ($appropriationsData) {
            return new AppropriationsModel($appropriationsData);
        });
    }


    public function render()
    {
        return view('livewire.appropriations');
    }
}