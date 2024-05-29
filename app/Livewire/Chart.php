<?php

namespace App\Livewire;

use Livewire\Component;

class Chart extends Component
{

    public $state;

    public function render()
    {
        return view('livewire.chart');
    }
}