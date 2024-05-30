<?php

namespace App\Livewire;

use Livewire\Component;

class ActivityJustificationForm extends Component
{
    public function goBack() {
        return redirect ()->to('/chart');
    }
    public function render()
    {
        return view('livewire.activity-justification-form');
    }
}
