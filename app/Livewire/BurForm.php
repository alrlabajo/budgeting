<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bur;
use Illuminate\Support\Facades\Log;

class BurForm extends Component
{
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
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.bur-form');
    }
}
