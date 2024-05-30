<?php

namespace App\Livewire;

use App\Models\PersonalServices as PersonalServicesModel; // Import the PersonalServices model
use Livewire\Component;

class PersonalServices extends Component
{
    public $load_personalservices;
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $personalservicesData = PersonalServicesModel::all()->toArray();

        $this->load_personalservices = collect($personalservicesData)->map(function ($personalservicesData) {
            return new PersonalServicesModel($personalservicesData);
        });
    }

    public function render()
    {
        return view('livewire.personal-services');
    }
}