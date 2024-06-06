<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PersonnelSchedule;
use Illuminate\Support\Facades\Log;

class PersonnelScheduleForm extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $college_office = '';
    public $items = [
        [
            'item_no' => '',
            'grade_step' => '',
            'position' => '',
            'name_incumbent' => '',
            'annual_salary' => '',
            'proposed_salary' => '',
            'increase' => '',
            'total' => '',
            'sub_total' => ''
        ]
    ];

    protected $rules = [
        'college_office' => 'required',
        'items.*.item_no' => 'required|integer',
        'items.*.grade_step' => 'required|string',
        'items.*.position' => 'required|string',
        'items.*.name_incumbent' => 'required|string',
        'items.*.annual_salary' => 'required|numeric|min:0',
        'items.*.proposed_salary' => 'required|numeric|min:0',
        'items.*.increase' => 'required|numeric|min:0',
        'items.*.total' => 'required|numeric|min:0',
        'items.*.sub_total' => 'required|numeric|min:0',
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
                PersonnelSchedule::create([
                    'college_office' => $this->college_office,
                    'item_no' => $item['item_no'],
                    'grade_step' => $item['grade_step'],
                    'position' => $item['position'],
                    'name_incumbent' => $item['name_incumbent'],
                    'annual_salary' => $item['annual_salary'],
                    'proposed_salary' => $item['proposed_salary'],
                    'increase' => $item['increase'],
                    'total' => $item['total'],
                    'sub_total' => $item['sub_total'],
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
        return redirect()->to('/chart');
    }

    public function render()
    {
        return view('livewire.personnel-schedule-form');
    }
}
