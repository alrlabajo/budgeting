<?php

namespace App\Livewire;

use Livewire\Component;

class Mooe extends Component
{
    public $load_mooe = [];

    public function mount() {
        $this->load_capital_outlay= Mooe::all();
    }

    public function render()
    {
        return view('livewire.mooe');
    }
}
