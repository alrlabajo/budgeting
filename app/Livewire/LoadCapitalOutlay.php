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
    public $created_at;

    public $college = '';
    public $justification;

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];


    // public $created_at = [];
    // public function getUniqueYears()
    // {
    //     $this->created_at = CapitalOutlay::selectRaw('YEAR(created_at) as year')->distinct()->pluck('year')->toArray();
    // }




    public function mount(CapitalOutlay $capital_outlay)
    {
        $this->capital_outlay = $capital_outlay;
        // $this->budget = $capital_outlay->budget;
        // $this->justification = $capital_outlay->justification;
        $this->created_at = CapitalOutlay::selectRaw('YEAR(created_at) as year')->distinct()->pluck('year')->toArray();

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

    public function goBack()
    {
        return redirect()->to('/');
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

        if ($this->college == '') {
            $total_expenses = CapitalOutlay::sum('budget');
        }
        else {
            $total_expenses = CapitalOutlay::where('college_office', $this->college)->sum('budget');
        }

        $this->item = CapitalOutlay::latest()->get();


        $english_format_number = number_format($total_expenses);

        return view('livewire.capital-outlay', [
            'capitalOutlay' => CapitalOutlay::when($this->college !== '', function ($query) {
                $query->where('college_office', $this->college, 'budget');
            })->paginate(180),
            'totalExpenses' => $english_format_number,

        ]);


    }

}
