<?php

namespace App\Livewire;

use App\Models\Mooe as MooeModel; // Import the Mooe model
use Livewire\Component;

class Mooe extends Component
{
    public $load_mooe;
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public function mount()
    {
        // Fetch data from the database and create model instances
        $mooesData = MooeModel::all()->toArray();

        $this->load_mooe = collect($mooesData)->map(function ($mooeData) {
            return new MooeModel($mooeData);
        });
    }

    public function render()
    {
        return view('livewire.mooe');
    }
}
