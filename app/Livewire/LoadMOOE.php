<?php

namespace App\Livewire;

use App\Models\MOOE;
use App\Models\FormOptions;
use Livewire\WithPagination;
use Livewire\Component;

class LoadMOOE extends Component
{
    use WithPagination;

    public $item, $budget, $justification, $mooe;
    public $load_mooe = [];
    public $year = [];
    public $college = '';

    # College office List #
    public $college_office = [
        'CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 
        'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 
        'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 
        'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 
        'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 
        'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 
        'University Research Center', 'Center for University Extension Service', 'University Health Service', 
        'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 
        'Physical Facilities Management Office', 'University Security Office'
    ];

    public function mount(Mooe $mooe)
    {
        $this->mooe = $mooe;
        $this->budget = $mooe->budget;
        $this->justification = $mooe->justification;
    }

    public function goBack()
    {
        return redirect()->to('/dashboard');
    }

    public function deleteMooe(Mooe $mooe)
    {
        $mooe->budget = 0;
        $mooe->justification = "";
        $mooe->save();
        return redirect()->to('/MOOE');
    }

    public function render()
    {
        if ($this->college == '') {
            $total_expenses = Mooe::sum('budget');
        } else {
            $total_expenses = Mooe::where('college_office', $this->college)->sum('budget');
        }

        $this->item = Mooe::latest()->get();
        $english_format_number = number_format($total_expenses);

        return view('livewire.mooe', [
            'load_mooe' => Mooe::when($this->college !== '', function ($query) {
                $query->where('college_office', $this->college, 'budget');
            })->paginate(180),
            'totalExpenses' => $english_format_number,
        ]);
    }
}