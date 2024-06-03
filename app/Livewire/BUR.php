<?php

namespace App\Livewire;

use App\Models\Bur as BurModel;

use Livewire\Component;

class BUR extends Component
{
    
    public $load_bur = [];

    public function mount()
    {
        // Fetch data from the database and create model instances
        $burData = BurModel::all()->toArray();

        $this->load_bur = collect($burData)->map(function ($burData) {
            return new BurModel($burData);
        });
    }

    public function render()
    {
        return view('livewire.b-u-r');
    }
}
