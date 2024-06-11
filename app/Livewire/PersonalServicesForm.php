<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PersonalServices;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PersonalServicesForm extends Component
{
    //variables
    public $existingRecord = false;
    public $ComparativeDataBudget = 0;
    public $year = 0;

    public $college_office = [
        'CASBE',
        'CBA',
        'CA',
        'CTHM',
        'CEng',
        'CISTM',
        'CHASS',
        'CED',
        'CN',
        'CPT',
        'CS',
        'CL',
        'GSL',
        'CM',
        'CPA',
        'Board of Regents',
        'PLM Office of the President',
        'Office of the Registrar',
        'Admission',
        'Office of the Executive Preisdent',
        'Office of the Vice President for Academic Support Units',
        'Office of University Legal Council',
        'Office of the Vice President for Information and Communications',
        'Office of the Vice President for Administration',
        'Office of the Vice President for Finance',
        'Cash Office/Treasury',
        'Budget Office',
        'Internal Audit Office',
        'ICTO',
        'Office of Guidance and Testing Services',
        'Office of Student and Development Services',
        'University Library',
        'University Research Center',
        'Center for University Extension Service',
        'University Health Service',
        'National Service Training Program',
        'Human Resource Development Office',
        'Procurement Office',
        'Property and Supplies Office',
        'Physical Facilities Management Office',
        'University Security Office',
    ];
    public $CollegeOffice = '';
    public $currentYear = 0;
    public $items = [
        ['account_code' => '5-01-01-010', 'item' => 'Salaries & Wages - Regular', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-01-020', 'item' => 'Salaries & Wages - Casual', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-010', 'item' => 'Personnel Economic Relief Allow (PERA - ₱2,000.00/mo/pos)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-020', 'item' => 'Representation Allowance (RA)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-030', 'item' => 'Transportation Allowance (TA)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-040', 'item' => 'Clothing/Uniform Allowance (₱6,000.00/position/annum)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-050', 'item' => 'Subsistence Allowance', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-060', 'item' => 'Laundry Allowance', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-100', 'item' => 'Honoria (including overload teaching, panel members, etc)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-110', 'item' => 'Hazard Pay', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-120', 'item' => 'Longevity Pay', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-130', 'item' => 'Overtime & Night Pay', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-140', 'item' => 'Year End Bous (total of salaries & wages-regular & casual/12)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-02-150', 'item' => 'Cash Gift (₱5,000/position)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-03-010', 'item' => 'Retirement & Life Insurance Contributions (12% of salaries & wages - regular and casual)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-03-020', 'item' => 'Pag-IBIG Contributions (₱1,200.00/position/annum)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-03-030', 'item' => 'PHILHEALTH Contributions (2.5% of salaries & wages - regular and casual)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-03-040', 'item' => 'ECC Contributions (₱1,200.00/position and annum)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-04-030', 'item' => 'Terminal Leave Benefits (accum. leave credits of retired emp.)', 'budget' => '', 'justification' => ''],
        ['account_code' => '5-01-04-990', 'item' => 'Other Personnel Benefits', 'budget' => '', 'justification' => ''],
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
                PersonalServices::create([
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

    public function goBack()
    {
        return redirect()->to('/');
    }
    public function render()
    {
        $this->college_years = PersonalServices::select(DB::raw('YEAR(created_at) as year'))->distinct()->orderBy('year', 'desc')->pluck('year')->toArray();

        $this->currentYear = date('Y');
        if (in_array($this->currentYear, $this->college_years)) {
            session()->flash('message', 'You have already submitted some Personal Services Forms for this school year ' . $this->currentYear . ' - ' . ($this->currentYear + 1) . '.');
        }

        $existingRecord = PersonalServices::where('college_office', $this->CollegeOffice)
            ->whereRaw('YEAR(created_at) = YEAR(CURDATE())')
            ->first();

        if ($existingRecord) {
            $this->flag = 1;
            // dd($this->flag);
        } else {
            $this->flag = 0;
        }
        return view('livewire.personal-services-form');
    }
}
