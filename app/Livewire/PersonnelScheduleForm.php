<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PersonnelSchedule;
use Illuminate\Support\Facades\Log;

class PersonnelScheduleForm extends Component
{
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

    public function goBack() {
        return redirect ()->to('/chart');
    }
    
    public function render()
    {
        return view('livewire.personnel-schedule-form');
    }
}