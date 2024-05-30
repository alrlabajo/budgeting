<?php

namespace App\Livewire;

use Livewire\Component;

class PpmpForm extends Component
{
    public function goBack() {
        return redirect ()->to('/chart');
    }
    public function render()
    {
        return view('livewire.ppmp-form');
    }
}
