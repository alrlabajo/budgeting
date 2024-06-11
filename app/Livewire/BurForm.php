<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bur;
use Illuminate\Support\Facades\Log;

class BurForm extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $college_office = '';
    public $items = [
        [
            'no' => '',
            'payee' => '',
            'office' => '',
            'address' => '',
            'responsibility_center' => '',
            'account_code' => '',
            'particulars' => '',
            'amount' => ''
        ]
    ];

    protected $rules = [
        'items.*.no' => 'required|integer',
        'items.*.payee' => 'required|string',
        'items.*.office' => 'required|string',
        'items.*.address' => 'required|string',
        'items.*.responsibility_center' => 'required|string',
        'items.*.account_code' => 'required|string',
        'items.*.particulars' => 'required|string',
        'items.*.amount' => 'required|numeric|min:0',
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
        Log::info('Submitting data', ['items' => $this->items]);

        // Insert data into database

        try {
            foreach ($this->items as $item) {
                // dd("Inserting data into database");
                Bur::create([
                    'no' => $item['no'],
                    'payee' => $item['payee'],
                    'office' => $item['office'],
                    'address' => $item['address'],
                    'responsibility_center' => $item['responsibility_center'],
                    'account_code' => $item['account_code'],
                    'particulars' => $item['particulars'],
                    'amount' => $item['amount'],
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
        return view('livewire.bur-form');
    }
}
