<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CapitalOutlay;
use Illuminate\Support\Facades\Log;

class CapitalOutlayForm extends Component
{
    public $college_office = '';
    public $items = [
        ['account_code' => '1-07-04-020', 'item' => 'School Buildings', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-020', 'item' => 'Office Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-030', 'item' => 'Information and Communication Technology Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-070', 'item' => 'Communication Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-090', 'item' => 'Disaster Response and Rescue Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-110', 'item' => 'Medical Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-130', 'item' => 'Sports Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-140', 'item' => 'Technical and Scientific Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-05-990', 'item' => 'Other Machinery and Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-06-010', 'item' => 'Transportation Equipment', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-07-010', 'item' => 'Furniture and Fixtures', 'budget' => '', 'justification' => ''],
        ['account_code' => '1-07-07-020', 'item' => 'Books', 'budget' => '', 'justification' => '']
    ];

    protected $rules = [
        'college_office' => 'required',
        'items.*.budget' => 'required|numeric|min:0',
        'items.*.justification' => 'required|string|max:255',
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
                CapitalOutlay::create([
                    'college_office' => $this->college_office,
                    'account_code' => $item['account_code'],
                    'item' => $item['item'],
                    'budget' => $item['budget'],
                    'justification' => $item['justification'],
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

    public function render()
    {
        return view('livewire.capital-outlay-form');
    }
}