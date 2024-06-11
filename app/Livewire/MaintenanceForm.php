<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MOOE;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class MaintenanceForm extends Component
{
    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $CollegeOffice = '';

    public $existingRecord = false;
    public $ComparativeDataBudget = 0;
    public $flag = 0;

    public $year = 0;
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
                $existingRecord = CapitalOutlay::where('college_office', $this->college_office)
                ->where('account_code', $item['account_code'])
                ->where('item', $item['item'])
                ->whereRaw('YEAR(created_at) = YEAR(CURDATE())')
                ->first();

                if ($existingRecord) {
                    // Return error message if record already exists

                    session()->flash('message', 'Record already exists for ' . $this->college_office . ' for school year ' . date('Y') . ' - ' . (date('Y') + 1) . '.');
                    return redirect()->to('/capital-outlay-form');
                }
                else {
                        Mooe::create([
                            'college_office' => $this->CollegeOffice,
                            'account_code' => $item['account_code'],
                            'item' => $item['item'],
                            'budget' => $item['budget'],
                            'justification' => $item['justification'],
                        ]);
                    }
            }
        } catch (\Exception $e) {
            // Log error
            Log::error('Error submitting data', ['error' => $e->getMessage()]);
            // Throw the exception
            throw $e;
        }

        // Flash success message
        session()->flash('message', 'Form submitted successfully.');
        $this->reset();

    }

    public function goBack() {
        return redirect ()->to('/');
    }
    public function render()
    {
        $this->college_years = Mooe::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->toArray();

        $this->currentYear = date('Y');
            // dd($this->college_years, $this->currentYear);
            if (in_array($this->currentYear, $this->college_years)) {
                $this->flag = 1;
                session()->flash('message', 'You have already submitted some Capital Outlay Forms for this school year ' . $this->currentYear . ' - ' . ($this->currentYear + 1) . '.');
            }

        return view('livewire.maintenance-form', [
            'college_years' => $this->college_years,
            'ComparativeDataBudget' => $this->ComparativeDataBudget,
            'CollegeOffice' => $this->CollegeOffice,
            'existingRecord' => $this->existingRecord,
        ]);
    }
}
