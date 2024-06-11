<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appropriations;
use Illuminate\Support\Facades\Log;

class Appropriationsform extends Component
{
    public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];
    public $college_office = '';
    public $school_year = '';
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
        ['account_code' => '5-01-01-180', 'item' => 'Rep. Maint. - Buildings & Other Structures', 'budget' => '', 'justification' => ''], ['account_code' => '1-07-04-020', 'item' => 'School Buildings', 'budget' => '', 'justification' => ''],
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
        'school_year' => 'required|date',
        'items.*.account_code' => 'required|string',
        'items.*.items_expenditure' => 'required|string',
        'items.*.budget' => 'required|numeric|min:0',
        'items.*.approved_board' => 'required|string',
        'items.*.total' => 'required|numeric|min:0',
        'items.*.obligations' => 'required|numeric|min:0',
        'items.*.unobligated' => 'required|numeric|min:0',
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
        Log::info('Submitting data', ['college_office' => $this->college_office, 'school_year' => $this->school_year, 'items' => $this->items]);

        // Insert data into database
        try {
            foreach ($this->items as $item) {
                Appropriations::create([
                    'college_office' => $this->college_office,
                    'date' => $this->school_year,
                    'account_code' => $item['account_code'],
                    'items_expenditure' => $item['items_expenditure'],
                    'budget' => $item['budget'],
                    'approved_board' => $item['approved_board'],
                    'total' => $item['total'],
                    'obligations' => $item['obligations'],
                    'unobligated' => $item['unobligated'],
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
    }

    public function goBack()
    {
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.appropriationsform');
    }
}
