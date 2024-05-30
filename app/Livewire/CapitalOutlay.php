<?php

namespace App\Livewire;

use Livewire\Component;

class CapitalOutlay extends Component
{

    public $load_capital_outlay = [];

    public function mount() {
        $this->load_capital_outlay= CapitalOutlay::all();
    }

    public function render()
    {
        return view('livewire.capital-outlay');
    }
}
