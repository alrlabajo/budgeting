<?php

namespace App\Livewire;

use Livewire\Component;

class PersonnelScheduleForm extends Component
{
    public function goBack() {
        return redirect ()->to('/chart');
    }

    public function render()
    {
        return view('livewire.personnel-schedule-form');
    }
}
