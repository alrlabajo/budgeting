<?php

namespace App\Livewire;

use App\Models\Mooe;
use Livewire\Component;

class EditMOOE extends Component
{
    public $mooe;

    public $budget;
    public $justification;

    public function mount(Mooe $mooe)
    {
        $this->mooe = $mooe;
        $this->budget = $mooe->budget;
        $this->justification = $mooe->justification;
    }

    public function updateMooe(){
        $validated = $this->validate([
            "budget" => 'required|numeric',
            "justification" => 'required|max:255'
        ]);

        $this->mooe->update($validated);
        session()->flash('success','Mooe Updated Successfully');
        return redirect()->to('/MOOE');
    }

    public function render()
    {
        return view('livewire.edit-m-o-o-e');
    }
}