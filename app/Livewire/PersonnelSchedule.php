<?php

namespace App\Livewire;

use App\Models\PersonnelSchedule as PersonnelScheduleModel;
use Livewire\Component;

class PersonnelSchedule extends Component
{
    
    public $load_personnelschedule = [];
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $personnelscheduleData = PersonnelScheduleModel::all()->toArray();

        $this->load_personnelschedule = collect($personnelscheduleData)->map(function ($personnelscheduleData) {
            return new PersonnelScheduleModel($personnelscheduleData);
        });
    }


    public function render()
    {
        return view('livewire.personnel-schedule');
    }
}