<?php

namespace App\Livewire;

use App\Models\PersonalServices;
use App\Models\FormOptions;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class LoadPersonalServices extends Component
{

    //1. variables
    public $editedBudgetIndex = null;
    public $load_personalservices = [];
    public $college = '';
    public $year = 0;


    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];

    // edit-budget function
    public function editBudget($index)
    {

        $this->editedBudgetIndex = $index;
    }

    //2. save-budget function
    public function saveBudget($budgetIndex) {
        $budget = $this->budgets[$budgetIndex] ?? NULL;
        if(!is_null($budget)) {
            $editedBudget = PersonalServices::find($budget['capital_outlay_id']);
            if ($editedBudget) {
                $editedBudget->update($budget);
            }
        }
        $this->editedBudgetIndex = null;
    }

    //3. go-back function
    public function goBack()
    {
        return redirect()->to('/');
    }

    //4. delete-capital-outlay function
    public function deletePersonalServices(PersonalServices $personal_services) {
        // return $capital_outlay;
        $personal_services->budget = 0;
        $personal_services->justification = "";
        $personal_services->save();
        return redirect()->to('/personal-services');
    }


    //5. render function
    public function render()
    {
        $this->college_years = PersonalServices::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->toArray();

        $this->load_personalservices = PersonalServices::when($this->college !== '', function ($query) {
            $query->where('college_office', $this->college);
        })->when($this->year !== 0, function ($query) {
            $query->whereYear('created_at', '=', $this->year);
        })->get()->toArray();


        if ($this->college == '') {
            $total_expenses = PersonalServices::sum('budget');
        }
        else {
            $total_expenses = PersonalServices::where('college_office', $this->college)->sum('budget');
        }

        $english_format_number = number_format($total_expenses);



        return view('livewire.personal-services',[
            'totalExpenses' => $english_format_number,
            'load_personalservices' => $this->load_personalservices,
            'college_years' => $this->college_years,
        ]);
    }
}
