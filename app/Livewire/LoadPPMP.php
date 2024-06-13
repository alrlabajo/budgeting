<?php

namespace App\Livewire;

use App\Models\PPMP;
use App\Models\FormOptions;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class LoadPPMP extends Component
{

    public $editedBudgetIndex = null;
    public $load_ppmp = [];
    public $college = '';
    public $year = 0;

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    // edit-budget function
    public function editBudget($index)
    {
        $this->editedBudgetIndex = $index;
    }

    //2. save-budget function
    public function saveBudget($ppmp_index) {
        $ppmp = $this->load_ppmp[$ppmp_index] ?? NULL;
        if(!is_null($ppmp)) {
            $editedBudget = PPMP::find($ppmp['ppmp_id']);
            if ($editedBudget) {
                $editedBudget->update($ppmp);
            }
        }
        $this->editedBudgetIndex = null;
    }

    //3. delete-ppmp row
    public function deleteCapitalOutlay(PPMP $ppmp) {
        // return $capital_outlay;
        $ppmp->program_title = "";
        $ppmp->project_title = "";
        $ppmp->type_contract = "";
        $ppmp->account_title = "";
        $ppmp->item_name = "";
        $ppmp->unit_issue = "";
        $ppmp->unit_price = 0;
        $ppmp->quantity = 0;
        $ppmp->account_code = "";
        $ppmp->description = "";
        $ppmp->procurement_method = "";
        $ppmp->estimated_budget = 0;
        $ppmp->Jan = 0;
        $ppmp->Feb = 0;
        $ppmp->Mar = 0;
        $ppmp->Apr = 0;
        $ppmp->May = 0;
        $ppmp->Jun = 0;
        $ppmp->Jul = 0;
        $ppmp->Aug = 0;
        $ppmp->Sep = 0;
        $ppmp->Oct = 0;
        $ppmp->Nov = 0;
        $ppmp->Dec = 0;
        $ppmp->selected_months = [];

        $ppmp->save();
        return redirect()->to('/PPMP');
    }



    public function goBack()
    {
        return redirect()->to('/');
    }

    public function render()
    {
        $this->college_years = PPMP::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->toArray();

        $this->load_ppmp = PPMP::when($this->college !== '', function ($query) {
            $query->where('college_office', $this->college);
        })->when($this->year !== 0, function ($query) {
            $query->whereYear('created_at', '=', $this->year);
        })->get()->toArray();


        return view('livewire.p-p-m-p',[
            'college_years' => $this->college_years,
        ]);
    }
}
