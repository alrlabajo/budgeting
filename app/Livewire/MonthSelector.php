<?php

namespace App\Livewire;

use Livewire\Component;

class MonthSelector extends Component
{
    public $selectedMonths = [];

    public function toggleMonth($month)
    {
        if (in_array($month, $this->selectedMonths)) {
            $this->selectedMonths = array_diff($this->selectedMonths, [$month]);
        } else {
            $this->selectedMonths[] = $month;
        }
    }

    public function render()
    {
        return view('livewire.month-selector');
    }
}
