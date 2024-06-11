<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ActivityJustification;
use Illuminate\Support\Facades\Log;

class ActivityJustificationForm extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $college_office = '';
    public $items = [
        [
            'statement_major' => '',
            'statement_specific' => '',
            'activity_justification' => '',
            'estimated_no_students' => '',
            'total_cost' => '',
            'cost_per_student' => '',
            'method_accomplishing' => '',
            'services_budget' => '',
            'mooe_budget' => '',
            'capital_outlay_budget' => '',
            'total' => ''
        ]
    ];

    protected $rules = [
        'college_office' => 'required',
        'items.*.statement_major' => 'required|string',
        'items.*.statement_specific' => 'required|string',
        'items.*.activity_justification' => 'required|string',
        'items.*.estimated_no_students' => 'required|integer',
        'items.*.total_cost' => 'required|numeric|min:0',
        'items.*.cost_per_student' => 'required|numeric|min:0',
        'items.*.method_accomplishing' => 'required|string',
        'items.*.services_budget' => 'required|numeric|min:0',
        'items.*.mooe_budget' => 'required|numeric|min:0',
        'items.*.capital_outlay_budget' => 'required|numeric|min:0',
        'items.*.total' => 'required|numeric|min:0',
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
        Log::info('Submitting data', ['college_office' => $this->college_office, 'items' => $this->items]);

        // Insert data into database

        try {
            foreach ($this->items as $item) {
                // dd("Inserting data into database");
                ActivityJustification::create([
                    'college_office' => $this->college_office,
                    'statement_major' => $item['statement_major'],
                    'statement_specific' => $item['statement_specific'],
                    'activity_justification' => $item['activity_justification'],
                    'estimated_no_students' => $item['estimated_no_students'],
                    'total_cost' => $item['total_cost'],
                    'cost_per_student' => $item['cost_per_student'],
                    'method_accomplishing' => $item['method_accomplishing'],
                    'services_budget' => $item['services_budget'],
                    'mooe_budget' => $item['mooe_budget'],
                    'capital_outlay_budget' => $item['capital_outlay_budget'],
                    'total' => $item['total'],
                ]);
            }

            // Flash success message
            session()->flash('message', 'Form submitted successfully.');
            $this->reset();
            return redirect()->to('/activity-justification');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error submitting data', ['error' => $e->getMessage()]);
            // Throw the exception
            throw $e;
        }

        // catch (\Exception $e) {
        //     // Log error
        //     Log::error('Error submitting data', ['error' => $e->getMessage()]);
        //     session()->flash('message', 'There was an error submitting the form.');
        // }
    }

    public function goBack()
    {
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.activity-justification-form');
    }
}
