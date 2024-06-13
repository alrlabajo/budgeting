<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PPMP;
use Illuminate\Support\Facades\Log;

class PpmpForm extends Component
{

    public $existingRecord = false;
    public $ComparativeDataBudget = 0;
    public $year = 0;
    public $currentYear = 0;
    public $flag = 0;
    public $CollegeOffice = '';

    public array $checkboxes;
	public $manyStuff;

    public $selectMonths = [
        'January' => '',
        'February' => '',
        'March' => '',
        'April' => '',
        'May' => '',
        'June' => '',
        'July' => '',
        'August' => '',
        'September' => '',
        'October' => '',
        'November' => '',
        'December' => '',
    ];

    public $month = "";

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];



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
            'estimated_budget' => '',
            'Jan' => '',
            'Feb' => '',
            'Mar' => '',
            'Apr' => '',
            'May' => '',
            'Jun' => '',
            'Jul' => '',
            'Aug' => '',
            'Sep' => '',
            'Oct' => '',
            'Nov' => '',
            'Dec' => '',
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
    public function submit(PPMP $ppmp)
    {
        $this->setOfIds->manyStuff->pluck('id')->toArray();
        $this->checkboxes = array_fill_keys($setOfIds, true);
        $this->manyStuff = $ppmp->manyStuff;
        dd($this->manyStuff);

        // $this->selectMonths = $this->selectMonths;


        // dd($this->selectMonths);
        // // Validate input
        // $this->validate();

        // // Log data for debugging
        // Log::info('Submitting data', ['college_office' => $this->college_office, 'items' => $this->items]);

        // // Insert data into database

        // try {
        //     foreach ($this->items as $item) {
        //         // dd("Inserting data into database");
        //         PPMP::create([
        //             'college_office' => $this->CollegeOffice,
        //             'program_title' => $item['program_title'],
        //             'project_title' => $item['project_title'],
        //             'type_contract' => $item['type_contract'],
        //             'account_title' => $item['account_title'],
        //             'item_name' => $item['item_name'],
        //             'unit_issue' => $item['unit_issue'],
        //             'unit_price' => $item['unit_price'],
        //             'quantity' => $item['quantity'],
        //             'account_code' => $item['account_code'],
        //             'description' => $item['description'],
        //             'procurement_method' => $item['procurement_method'],
        //             'estimated_budget' => $item['estimated_budget'],
        //         ]);
        //     }

        //     // Flash success message
        //     session()->flash('message', 'Form submitted successfully.');
        //     $this->reset();
        // } catch (\Exception $e) {
        //     // Log error
        //     Log::error('Error submitting data', ['error' => $e->getMessage()]);
        //     // Throw the exception
        //     throw $e;
        // }

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


        $this->currentYear = date('Y');


        return view('livewire.ppmp-form', [
            'items' => $this->items,
            'ComparativeDataBudget' => $this->ComparativeDataBudget,
            'CollegeOffice' => $this->CollegeOffice,
            'existingRecord' => $this->existingRecord,
            'flag' => $this->flag,
            'currentYear' => $this->currentYear,
            'month' => $this->month,
            'selectMonths' => $this->selectMonths,
        ]);
    }
}
