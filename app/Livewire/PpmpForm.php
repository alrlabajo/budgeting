<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PPMP;
use Illuminate\Support\Facades\Log;

class PpmpForm extends Component
{
    public $college_office = '';
    public $items = [
        [
         'program_title' => '',
         'project_title' => '',
         'type_contract' => '',
         'account_title' => '',
         'item_name' => '',
         'unit_issue' => '',
         'unit_price' => '',
         'quantity' => '',
         'account_code' => '',
         'description' => '',
         'procurement_method' => '',
         'estimated_budget' => ''
        ]
    ];

    protected $rules = [
        'college_office' => 'required',
        'items.*.program_title' => 'required|string',
        'items.*.project_title' => 'required|string',
        'items.*.type_contract' => 'required|string',
        'items.*.account_title' => 'required|string',
        'items.*.item_name' => 'required|string',
        'items.*.unit_issue' => 'required|string',
        'items.*.unit_price' => 'required|numeric|min:0',
        'items.*.quantity' => 'required|integer',
        'items.*.account_code' => 'required|string',
        'items.*.description' => 'required|string',
        'items.*.procurement_method' => 'required|string',
        'items.*.estimated_budget' => 'required|numeric|min:0',
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
                PPMP::create([
                    'college_office' => $this->college_office,
                    'program_title' => $item['program_title'],
                    'project_title' => $item['project_title'],
                    'type_contract' => $item['type_contract'],
                    'account_title' => $item['account_title'],
                    'item_name' => $item['item_name'],
                    'unit_issue' => $item['unit_issue'],
                    'unit_price' => $item['unit_price'],
                    'quantity' => $item['quantity'],
                    'account_code' => $item['account_code'],
                    'description' => $item['description'],
                    'procurement_method' => $item['procurement_method'],
                    'estimated_budget' => $item['estimated_budget'],
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
        return view('livewire.ppmp-form');
    }
}
