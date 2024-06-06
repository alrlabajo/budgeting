<?php

namespace App\Livewire;

use App\Models\CapitalOutlay;
use Livewire\Component;

class EditCapitalOutlay extends Component
{
    public $capital_outlay;

    public $budget;
    public $justification;

    public function mount(CapitalOutlay $capital_outlay)
    {
        $this->capital_outlay = $capital_outlay;
        $this->budget = $capital_outlay->budget;
        $this->justification = $capital_outlay->justification;
    }

    public function updateCapitalOutlay(){
        $validated = $this->validate([
            "budget" => 'required|numeric',
            "justification" => 'required|max:255'
        ]);

        $this->capital_outlay->update($validated);
        session()->flash('success','CapitalOutlay Updated Successfully');
        return redirect()->to('/capital-outlay');
    }

    public function render()
    {
        return view('livewire.edit-capital-outlay');
    }
}




