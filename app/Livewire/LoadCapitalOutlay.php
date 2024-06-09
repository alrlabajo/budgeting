<?php

namespace App\Livewire;

use App\Models\CapitalOutlay;
use App\Models\FormOptions;
use Livewire\WithPagination;


use Livewire\Component;

class LoadCapitalOutlay extends Component
{

    use WithPagination;

    public $editedBudgetIndex = null;
    public $budgets = [];

    // public $item;


    public $load_capital_outlay = [];
    public $year = [];

    public $college = '';

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];

    public function editBudget($index)
    {

        $this->editedBudgetIndex = $index;
    }


    public function saveBudget($budgetIndex) {
        $budget = $this->budgets[$budgetIndex] ?? NULL;
        if(!is_null($budget)) {
            $editedBudget = CapitalOutlay::find($budget['capital_outlay_id']);
            if ($editedBudget) {
                $editedBudget->update($budget);
            }
        }
        $this->editedBudgetIndex = null;
    }

    public function goBack()
    {
        return redirect()->to('/dashboard');
    }

    public function deleteCapitalOutlay(CapitalOutlay $capital_outlay) {
        return $capital_outlay;
        $capital_outlay->budget = 0;
        $capital_outlay->justification = "";
        $capital_outlay->save();
        return redirect()->to('/capital-outlay');
    }

    public function render()
    {
        $this->budgets = CapitalOutlay::all()->toArray();

        if ($this->college == '') {
            $total_expenses = CapitalOutlay::sum('budget');
        }
        else {
            $total_expenses = CapitalOutlay::where('college_office', $this->college)->sum('budget');
        }

        // $this->item = CapitalOutlay::latest()->get();


        $english_format_number = number_format($total_expenses);

        return view('livewire.capital-outlay', [
            // 'capitalOutlay' => CapitalOutlay::when($this->college !== '', function ($query) {
            //     $query->where('college_office', $this->college, 'budget');
            // })->paginate(180),
            // 'totalExpenses' => $english_format_number,
            'budgets' => $this->budgets,

        ]);


    }

}
