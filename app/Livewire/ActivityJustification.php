<?php

namespace App\Livewire;

use App\Models\ActivityJustification as ActivityJustificationModel;
use Livewire\Component;

class ActivityJustification extends Component
{

    public $load_activityjustification = [];
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $activityjustificationData = ActivityJustificationModel::all()->toArray();

        $this->load_activityjustification = collect($activityjustificationData)->map(function ($activityjustificationData) {
            return new ActivityJustificationModel($activityjustificationData);
        });
    }

    
    public function render()
    {
        return view('livewire.activity-justification');
    }
}