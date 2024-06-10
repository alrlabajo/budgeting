<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;


class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;
    public $daysInMonth;
    public $currentDay;
    public $firstDayOfMonth;

    public function mount()
    {
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;
        $this->currentDay = Carbon::now()->day;
        $this->updateDaysInMonth();
    }

    public function render()
    {
        return view('livewire.calendar');
    }

    public function goToPreviousMonth()
    {
        $this->currentMonth--;
        if ($this->currentMonth < 1) {
            $this->currentMonth = 12;
            $this->currentYear--;
        }
        $this->updateDaysInMonth();
    }

    public function goToNextMonth()
    {
        $this->currentMonth++;
        if ($this->currentMonth > 12) {
            $this->currentMonth = 1;
            $this->currentYear++;
        }
        $this->updateDaysInMonth();
    }

    private function updateDaysInMonth()
    {
        $this->daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->daysInMonth;
        $this->firstDayOfMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->dayOfWeek;
    }
}
