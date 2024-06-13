<?php

namespace App\Livewire;

use App\Models\PersonnelSchedule;
use App\Models\FormOptions;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class LoadPersonnelSchedule extends Component
{

    public $editedBudgetIndex = null;
    public $load_personnelschedule = [];
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
        $load_personnelschedule = $this->load_personnelschedule [$budgetIndex] ?? NULL;
         if(!is_null($load_personnelschedule)) {
             $editedBudget = PersonnelSchedule::find($load_personnelschedule ['personnelsched_id']);
             if ($editedBudget) {
                 $editedBudget->update($load_personnelschedule );
             }
         }
         $this->editedBudgetIndex = null;
     }

    public function goBack()
    {
        return redirect()->to('/');
    }


    public function render()
    {
        $this->college_years = PersonnelSchedule::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->toArray();

        $this->load_personnelschedule = PersonnelSchedule::when($this->college !== '', function ($query) {
            $query->where('college_office', $this->college);
        })->when($this->year !== 0, function ($query) {
            $query->whereYear('created_at', '=', $this->year);
        })->get()->toArray();


        return view('livewire.personnel-schedule', [
            'college_years' => $this->college_years,
            'load_personnelschedule' => $this->load_personnelschedule,
        ]);
    }
}
