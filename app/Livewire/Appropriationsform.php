<?php

namespace App\Livewire;

use Livewire\Component;

class Appropriationsform extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];
    public $college_office = '';
    
    public function render()
    {
        return view('livewire.appropriationsform');
    }
}
