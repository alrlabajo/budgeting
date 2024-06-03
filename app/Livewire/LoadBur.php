<?php

namespace App\Livewire;

use App\Models\Bur;

use Livewire\Component;

class LoadBur extends Component
{
    
    public $load_bur = [];
    public $year = [];
    
    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount($college_office = null, $year = null) {
        $this->load_bur = bur::when($college_office, function ($query, $college_office) {
            return $query->where('college_office', $college_office);
        })
        ->when($year, function ($query, $year) {
            return $query->whereYear('created_at', $year);
        })
        ->get();

        $this->year = $this->load_bur->map(function ($bur) {
            return $bur->created_at->format('Y');
        })->unique()->values();
    }

    public function goBack()
    {
        return redirect()->to('/chart');
    }

    public function render()
    {
        return view('livewire.load-bur');
    }
}
