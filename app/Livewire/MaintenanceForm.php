<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MOOE;
use Illuminate\Support\Facades\Log;

class MaintenanceForm extends Component
{
    public $college_office = '';
    public $items = [
        ['account_code' => '5-01-01-010', 'item' => 'Traveling Expenses - Local', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-020', 'item' => 'Traveling Expenses - Foreign', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-030', 'item' => 'Traveling Expenses ', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-040', 'item' => 'Office Supplies Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-050', 'item' => 'Accountable Forms Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-060', 'item' => 'Drugs & Medicines Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-070', 'item' => 'Medical, Dental, & Lab Supplies Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-080', 'item' => 'Fuel, Oil, & Lubricants Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-090', 'item' => 'Other Supplies Materials Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-100', 'item' => 'Water Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-110', 'item' => 'Electricity Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-120', 'item' => 'Postage & Courier Services', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-130', 'item' => 'Telephone Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-140', 'item' => 'Internet Subscription Expenses', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-150', 'item' => 'Extraordinary & Miscellaneous Expenses ', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-160', 'item' => 'Consultancy Services', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-170', 'item' => 'Other Professional Services ', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-180', 'item' => 'Rep. Maint. - Buildings & Other Structures', 'budget' => '', 'justification' => '']
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
                Mooe::create([
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

    public function goBack() {
        return redirect ()->to('/chart');
    }
    public function render()
    {
        return view('livewire.maintenance-form');
    }
}
