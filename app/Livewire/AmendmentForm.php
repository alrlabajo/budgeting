<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Amendment;
use Illuminate\Support\Facades\Log;

class AmendmentForm extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $college_office = '';
    public $items = [
        [
            'No' => '',
            'plan_no_revised' => '',
            'date_revision' => '',
            'planned_amount' => '',
            'date_submission' => '',
            'item_No' => '',
            'description' => '',
            'quantity' => '',
            'unit' => '',
            'unit_cost' => '',
            'amount' => '',
            'procurement_quantity' => '',
            'procurement_amount' => '',
            'procurement_justification' => ''
        ]
    ];

    protected $rules = [
        'college_office' => 'required',
        'items.*.No' => 'required|integer',
        'items.*.plan_no_revised' => 'required|integer',
        'items.*.date_revision' => 'required|date',
        'items.*.planned_amount' => 'required|numeric|min:0',
        'items.*.date_submission' => 'required|date',
        'items.*.item_No' => 'required|integer',
        'items.*.description' => 'required|string',
        'items.*.quantity' => 'required|integer',
        'items.*.unit' => 'required|string',
        'items.*.unit_cost' => 'required|numeric|min:0',
        'items.*.amount' => 'required|numeric|min:0',
        'items.*.procurement_quantity' => 'required|string',
        'items.*.procurement_amount' => 'required|numeric|min:0',
        'items.*.procurement_justification' => 'required|string',
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
                Amendment::create([
                    'college_office' => $this->college_office,
                    'No' => $item['No'],
                    'plan_no_revised' => $item['plan_no_revised'],
                    'date_revision' => $item['date_revision'],
                    'planned_amount' => $item['planned_amount'],
                    'date_submission' => $item['date_submission'],
                    'item_No' => $item['item_No'],
                    'description' => $item['description'],
                    'quantity' => $item['quantity'],
                    'unit' => $item['unit'],
                    'unit_cost' => $item['unit_cost'],
                    'amount' => $item['amount'],
                    'procurement_quantity' => $item['procurement_quantity'],
                    'procurement_amount' => $item['procurement_amount'],
                    'procurement_justification' => $item['procurement_justification'],
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
        return view('livewire.amendment-form');
    }
}
