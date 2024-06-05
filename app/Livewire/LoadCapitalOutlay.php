<?php

namespace App\Livewire;

use App\Models\CapitalOutlay;
use App\Models\FormOptions;
use Livewire\WithPagination;


use Livewire\Component;

class LoadCapitalOutlay extends Component
{

    use WithPagination;

    public $load_capital_outlay = [];
    public $year = [];

    public $college = '';

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];

    // public function mount($college_office = null, $year = null) {
    // public function mount($college_office = null, $year = null) {
    //     $this->load_capital_outlay = CapitalOutlay::when($college_office, function ($query, $college_office) {
    //         return $query->where('college_office', $college_office);
    //     })
    //     ->when($year, function ($query, $year) {
    //         return $query->whereYear('created_at', $year);
    //     })
    //     ->get();

    //     $this->year = $this->load_capital_outlay->map(function ($capitalOutlay) {
    //         return $capitalOutlay->created_at->format('Y');
    //     })->unique()->values();
    // }

    public function goBack()
    {
        return redirect()->to('/chart');
    }


    public function render()
    {

        return view('livewire.capital-outlay',[
            'capitalOutlay'=> CapitalOutlay::

            // when($college_office, function ($query, $college_office) {
            //         return $query->where('college_office', $college_office);
            // })->paginate(24)

            when($this->college !=='',function($query){
                $query->where('college_office',$this->college);
            })->paginate(180),

        ]);
    }
}
