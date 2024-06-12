<?php

namespace App\Livewire;

use App\Models\Mooe;
use App\Models\FormOptions;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class LoadMOOE extends Component
{

    use WithPagination;

    public $editedBudgetIndex = null;
    public $load_mooe = [];


    public $college = '';
    public $year = 0;

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];


    public function goBack()
    {
        return redirect()->to('/');
    }

    public function editBudget($index)
    {

        $this->editedBudgetIndex = $index;
    }

    public function saveBudget($budgetIndex) {
        $loadMooe = $this->load_mooe[$budgetIndex] ?? NULL;
        if(!is_null($loadMooe)) {
            $editedBudget = Mooe::find($loadMooe['mooe_id']);
            if ($editedBudget) {
                $editedBudget->update($loadMooe);
            }
        }
        $this->editedBudgetIndex = null;
    }

    // public $college_years;
    public function render()
    {

        $this->college_years = Mooe::select(DB::raw('YEAR(created_at) as year'))
                                    ->distinct()
                                    ->orderBy('year', 'desc')
                                    ->pluck('year')
                                    ->toArray();

        $this->load_mooe = Mooe::when($this->college !== '', function ($query) {
            $query->where('college_office', $this->college);
        })->when($this->year !== 0, function ($query) {
            $query->whereYear('created_at', '=', $this->year);
        })->get()->toArray();

        if ($this->college == '') {
            $total_expenses = Mooe::sum('budget');
        }
        else {
            $total_expenses = Mooe::where('college_office', $this->college)->sum('budget');
        }

        $english_format_number = number_format($total_expenses, 2);


        return view('livewire.mooe', [
            'totalExpenses' => $english_format_number,
            'load_mooe' => $this->load_mooe,
            'college_years' => $this->college_years,
        ]);
    }
}
