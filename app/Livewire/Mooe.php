<?php

namespace App\Livewire;

use Livewire\Component;

class Mooe extends Component
{

    public $load_mooe = [];

    public function mount() {
        $this->load_mooe= Mooe::all();
    }

    public function render()
    {
        return view('livewire.mooe');
    }
}