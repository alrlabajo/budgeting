<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appropriations;
use Illuminate\Support\Facades\Log;

class Appropriationsform extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $college_office = '';
    public $school_year = '';
    public $items = [
        [
            'account_code' => '',
            'items_expenditure' => '',
            'budget' => '',
            'approved_board' => '',
            'total' => '',
            'obligations' => '',
            'unobligated' => ''
        ]
    ];

    protected $rules = [
        'college_office' => 'required',
        'school_year' => 'required|date',
        'items.*.account_code' => 'required|string',
        'items.*.items_expenditure' => 'required|string',
        'items.*.budget' => 'required|numeric|min:0',
        'items.*.approved_board' => 'required|string',
        'items.*.total' => 'required|numeric|min:0',
        'items.*.obligations' => 'required|numeric|min:0',
        'items.*.unobligated' => 'required|numeric|min:0',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        // Validate input
        $this->validate();

        // Log data for debugging
        Log::info('Submitting data', ['college_office' => $this->college_office, 'school_year' => $this->school_year, 'items' => $this->items]);

        // Insert data into database
        try {
            foreach ($this->items as $item) {
                Appropriations::create([
                    'college_office' => $this->college_office,
                    'date' => $this->school_year,
                    'account_code' => $item['account_code'],
                    'items_expenditure' => $item['items_expenditure'],
                    'budget' => $item['budget'],
                    'approved_board' => $item['approved_board'],
                    'total' => $item['total'],
                    'obligations' => $item['obligations'],
                    'unobligated' => $item['unobligated'],
                ]);
            }

            // Flash success message
            session()->flash('message', 'Form submitted successfully.');
            $this->reset();
        } catch (\Exception $e) {
            // Log error
            Log::error('Error submitting data', ['error' => $e->getMessage()]);
            // Throw the exception
            throw $e;
        }
    }

    public function goBack()
    {
        return redirect()->to('/chart');
    }

    public function render()
    {
        return view('livewire.appropriationsform');
    }
}
