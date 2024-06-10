<?php

namespace App\Livewire;

use App\Models\CapitalOutlay;
use App\Models\FormOptions;
use Livewire\WithPagination;


use Livewire\Component;

class LoadCapitalOutlay extends Component
{

    use WithPagination;



    public $item, $budget;

    public $load_capital_outlay = [];
    public $year = [];

    public $college = '';

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];


    public $capital_outlay;
    public $justification;


    public function mount(CapitalOutlay $capital_outlay)
    {
        $this->capital_outlay = $capital_outlay;
        $this->budget = $capital_outlay->budget;
        $this->justification = $capital_outlay->justification;
    }

    public function goBack()
    {
        return redirect()->to('/dashboard');
    }

    public function deleteCapitalOutlay(CapitalOutlay $capital_outlay) {
        // return $capital_outlay;
        $capital_outlay->budget = 0;
        $capital_outlay->justification = "";
        $capital_outlay->save();
        return redirect()->to('/capital-outlay');
    }

    public function render()
    {
        $total_expenses = $this->college == ''
            ? CapitalOutlay::sum('budget')
            : CapitalOutlay::where('college_office', $this->college)->sum('budget');
    
        $this->item = CapitalOutlay::latest()->get();
    
        $english_format_number = number_format($total_expenses);
    
        // Prepare data for Chart.js
        $budgetData = CapitalOutlay::select('budget', 'item')->get();
    
        return view('livewire.capital-outlay', [
            'capitalOutlay' => CapitalOutlay::when($this->college !== '', function ($query) {
                $query->where('college_office', $this->college, 'budget');
            })->paginate(180),
            'totalExpenses' => $english_format_number,
            'budgetData' => $budgetData, // Pass the data to the view
        ]);

        return response()->json(['budgetData'=>[
            $budgetData->budget
        ]]);
    }

}
