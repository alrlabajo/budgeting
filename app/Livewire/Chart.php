<?php

namespace App\Livewire;



use App\Models\CapitalOutlay;
use App\Models\MOOE;

use Livewire\Component;

class Chart extends Component
{

    public $state;

    public $subscriptions = [
        ['Day'=>'Mon', 'Value'=>10],
        ['Day'=>'Tue', 'Value'=>20],
        ['Day'=>'Wed', 'Value'=>15],
        ['Day'=>'Thu', 'Value'=>25],
        ['Day'=>'Fri', 'Value'=>30],
        ['Day'=>'Sat', 'Value'=>22],
        ['Day'=>'Sun', 'Value'=>18],
    ];

    public function render()
    {
        return view('livewire.chart');
    }
}
