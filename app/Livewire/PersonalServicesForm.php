<?php

namespace App\Livewire;

use Livewire\Component;

class PersonalServicesForm extends Component
{
    public function goBack() {
        return redirect ()->to('/chart');
    }
    public function render()
    {
        return view('livewire.personal-services-form');
    }
}
