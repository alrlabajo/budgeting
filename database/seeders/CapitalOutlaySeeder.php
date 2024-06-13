<?php

namespace Database\Seeders;

use App\Models\Amendment;
use App\Models\Bur;
use App\Models\ActivityJustification;
use App\Models\PersonnelSchedule;
use App\Models\PersonalServices;
use App\Models\CapitalOutlay;
use App\Models\Mooe;
use App\Models\PPMP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CapitalOutlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public $CollegeOffices = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA', 'Board of Regents', 'PLM Office of the President', 'Office of the Registrar', 'Admission', 'Office of the Executive Preisdent', 'Office of the Vice President for Academic Support Units', 'Office of University Legal Council', 'Office of the Vice President for Information and Communications', 'Office of the Vice President for Administration', 'Office of the Vice President for Finance', 'Cash Office/Treasury', 'Budget Office', 'Internal Audit Office', 'ICTO', 'Office of Guidance and Testing Services', 'Office of Student and Development Services', 'University Library', 'University Research Center', 'Center for University Extension Service', 'University Health Service', 'National Service Training Program', 'Human Resource Development Office', 'Procurement Office', 'Property and Supplies Office', 'Physical Facilities Management Office', 'University Security Office'];

     public $college_office = "CEng";

     public $capital_items = [
        ['account_code' => '1-07-04-020', 'item' => 'School Buildings', 'budget' => '2022001', 'justification' => 'testing'],
        ['account_code' => '1-07-05-020', 'item' => 'Office Equipment', 'budget' => '13301', 'justification' => 'testing'],
        ['account_code' => '1-07-05-030', 'item' => 'Information and Communication Technology Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-070', 'item' => 'Communication Equipment', 'budget' => '1340000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-090', 'item' => 'Disaster Response and Rescue Equipment', 'budget' => '1540000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-110', 'item' => 'Medical Equipment', 'budget' => '1640440', 'justification' => 'testing'],
        ['account_code' => '1-07-05-130', 'item' => 'Sports Equipment', 'budget' => '1040330', 'justification' => 'testing'],
        ['account_code' => '1-07-05-140', 'item' => 'Technical and Scientific Equipment', 'budget' => '1940000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-990', 'item' => 'Other Machinery and Equipment', 'budget' => '1240332', 'justification' => 'testing'],
        ['account_code' => '1-07-06-010', 'item' => 'Transportation Equipment', 'budget' => '124333', 'justification' => 'testing'],
        ['account_code' => '1-07-07-010', 'item' => 'Furniture and Fixtures', 'budget' => '2243000', 'justification' => 'testing'],
        ['account_code' => '1-07-07-020', 'item' => 'Books', 'budget' => '22433330', 'justification' => 'testing']
    ];

    public $ps_items = [
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
        ['account_code' => '5-01-04-990', 'item' => 'Other Personnel Benefits', 'budget' => '', 'justification' => '']
    ];

    public $moooe_items = [
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

    public $ppmp_items = [
        [
            'program_title' => 'COLLEGE/OFFICE WEEK',
            'project_title' => 'Selecting the best week for the college/office',
            'type_contract' => 'Quarter',
            'account_title' => '',
            'item_name' => 'Item',
            'unit_issue' => '1',
            'unit_price' => '',
            'quantity' => '120',
            'account_code' => 'xx-xx-xxxxx',
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

    public $personnel_items = [
            'item_no' => '',
            'grade_step' => '',
            'position' => '',
            'name_incumbent' => '',
            'annual_salary' => '',
            'proposed_salary' => '',
            'increase' => '',
            'total' => '',
            'sub_total' => ''
    ];

    public $activity_items = [
        [
            'statement_major' => '',
            'statement_specific' => '',
            'activity_justification' => '',
            'estimated_no_students' => '',
            'total_cost' => '',
            'cost_per_student' => '',
            'method_accomplishing' => '',
            'services_budget' => '',
            'mooe_budget' => '',
            'capital_outlay_budget' => '',
            'total' => ''
        ]
    ];

    public $bur_items = [
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

    public $amend_items = [
        [
            'No' => '',
            'plan_no_revised' => '',
            'date_revision' => '',
            'planned_amount' => '',
            'date_submission' => '',
            'item_No' => '',
            'description' => '',
            'quantity' => '',
            'unit' => '',
            'unit_cost' => '',
            'amount' => '',
            'procurement_quantity' => '',
            'procurement_amount' => '',
            'procurement_justification' => ''
        ]
    ];




    public $NumberOfYears = 3;

    public function run(): void
    {
        // $faker = CapitalOutlay::create();

        foreach($this->CollegeOffices as $college_office) {
            $this->college_office = $college_office;


            for($this->i = 0; $this->i <= 3; $this->i++) {
                foreach ($this->capital_items as $item) {
                    CapitalOutlay::create([
                    'college_office' => $college_office,
                    'account_code'=>  $item['account_code'],
                    'item'=>  $item['item'],
                    'budget'=> mt_rand(1000000, 9999999),
                    'justification'=>  "TEST-DATA -".$this->college_office,
                    //change subYear number to 1 if current year, 2 if previous year
                    'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                    'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                    ]);
                }
            }

            for($this->i = 0; $this->i <= 3; $this->i++) {
                foreach ($this->moooe_items as $item) {
                    Mooe::create([
                    'college_office' => $college_office,
                    'account_code'=>  $item['account_code'],
                    'item'=>  $item['item'],
                    'budget'=> mt_rand(1000000, 9999999),
                    'justification'=>  "TEST-DATA -".$this->college_office,
                    //change subYear number to 1 if current year, 2 if previous year
                    'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                    'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                    ]);
                }
            }

            for($this->i = 0; $this->i <= 3; $this->i++) {
                foreach ($this->ps_items as $item) {
                    PersonalServices::create([
                    'college_office' => $college_office,
                    'account_code'=>  $item['account_code'],
                    'item'=>  $item['item'],
                    'budget'=> mt_rand(1000000, 9999999),
                    'justification'=>  "TEST-DATA -".$this->college_office,
                    //change subYear number to 1 if current year, 2 if previous year
                    'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                    'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                    ]);
                }
            }

            for($this->i = 0; $this->i <= 3; $this->i++) {
                foreach ($this->ppmp_items as $item) {
                    PPMP::create([
                    'college_office' => $college_office,
                    'program_title'=>  $item['program_title'],
                    'project_title'=>  $item['project_title'],
                    'type_contract'=>  $item['type_contract'],
                    'account_title'=>  'Title - '.$this->college_office,
                    'item_name'=>  $item['item_name'],
                    'unit_issue'=>  $item['unit_issue'],
                    'unit_price'=>  mt_rand(1000000, 9999999),
                    'quantity'=>  $item['quantity'],
                    'account_code'=>  $item['account_code'],
                    'description'=>  "test data - ".$this->college_office,
                    'procurement_method'=>  "Cash / Cheque",
                    'estimated_budget'=>  mt_rand(1000000, 9999999),
                    'Jan'=>  (bool)random_int(0, 1),
                    'Feb'=>  (bool)random_int(0, 1),
                    'Mar'=>  (bool)random_int(0, 1),
                    'Apr'=> (bool)random_int(0, 1),
                    'May'=>  (bool)random_int(0, 1),
                    'Jun'=>  (bool)random_int(0, 1),
                    'Jul'=>  (bool)random_int(0, 1),
                    'Aug'=>  (bool)random_int(0, 1),
                    'Sep'=>  (bool)random_int(0, 1),
                    'Oct'=>  (bool)random_int(0, 1),
                    'Nov'=>  (bool)random_int(0, 1),
                    'Dec'=>  (bool)random_int(0, 1),

                    //change subYear number to 1 if current year, 2 if previous year
                    'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                    'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                    ]);
                }

                for($this->i = 0; $this->i <= 3; $this->i++) {
                    foreach ($this->personnel_items as $item) {
                        PersonnelSchedule::create([
                        'college_office' => $college_office,
                        'item_no' => mt_rand(1, 99),
                        'grade_step' => '1',
                        'position' => 'Officer - '.$this->college_office,
                        'name_incumbent' => 'Name -'.$this->college_office,
                        'annual_salary' => mt_rand(1000000, 9999999),
                        'proposed_salary' => mt_rand(1000000, 9999999),
                        'increase' => mt_rand(1000000, 9999999),
                        'total' => mt_rand(1000000, 9999999),
                        'sub_total' => mt_rand(1000000, 9999999),
                        //change subYear number to 1 if current year, 2 if previous year
                        'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                        'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                        ]);
                    }
                }

                for($this->i = 0; $this->i <= 3; $this->i++) {
                    foreach ($this->activity_items as $item) {
                        ActivityJustification::create([
                        'college_office' => $college_office,
                        'statement_major' => 'Statement Major - '.$this->college_office,
                        'statement_specific' => 'Statement Specific - '.$this->college_office,
                        'activity_justification' => 'Activity Justification - '.$this->college_office,
                        'estimated_no_students' => mt_rand(1, 99),
                        'total_cost' => mt_rand(1000000, 9999999),
                        'cost_per_student' => mt_rand(1000000, 9999999),
                        'method_accomplishing' => 'Method Accomplishing - '.$this->college_office,
                        'services_budget' => mt_rand(1000000, 9999999),
                        'mooe_budget' => mt_rand(1000000, 9999999),
                        'capital_outlay_budget' => mt_rand(1000000, 9999999),
                        'total' => mt_rand(1000000, 9999999),

                        //change subYear number to 1 if current year, 2 if previous year
                        'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                        'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                        ]);
                    }
                }

                for($this->i = 0; $this->i <= 3; $this->i++) {
                    foreach ($this->bur_items as $item) {
                        Bur::create([
                        'college_office' => $college_office,
                        'cfa_number' => 'CFA - '.$this->college_office,
                        'no' => mt_rand(1, 99),
                        'payee' => 'Payee - '.$this->college_office,
                        'office' => 'Office - '.$this->college_office,
                        'address' => 'Address - '.$this->college_office,
                        'responsibility_center' => 'Responsibility Center - '.$this->college_office,
                        'account_code' => 'Account Code - '.$this->college_office,
                        'particulars' => 'Particulars - '.$this->college_office,
                        'amount' => mt_rand(1000000, 9999999),

                        //change subYear number to 1 if current year, 2 if previous year
                        'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                        'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                        ]);
                    }
                }

                for($this->i = 0; $this->i <= 3; $this->i++) {
                    foreach ($this->amend_items as $item) {
                        Amendment::create([
                        'college_office' => $college_office,
                        'No' => mt_rand(1, 99),
                        'plan_no_revised' => mt_rand(1, 99),
                        'date_revision' => Carbon::now()->subYear($this->i)->subDays(),
                        'planned_amount' => mt_rand(1000000, 9999999),
                        'date_submission' => Carbon::now()->subYear($this->i)->subDays(),
                        'item_No' => mt_rand(1, 99),
                        'description' => 'Description - '.$this->college_office,
                        'quantity' => mt_rand(1, 99),
                        'unit' => 'Unit - '.$this->college_office,
                        'unit_cost' => mt_rand(1000000, 9999999),
                        'amount' => mt_rand(1000000, 9999999),
                        'procurement_quantity' => mt_rand(1, 99),
                        'procurement_amount' => mt_rand(1000000, 9999999),
                        'procurement_justification' => 'Procurement Justification - '.$this->college_office,

                        //change subYear number to 1 if current year, 2 if previous year
                        'created_at' => Carbon::now()->subYear($this->i)->subDays(),
                        'updated_at' => Carbon::now()->subYear($this->i)->subDays(),
                        ]);
                    }
                }



            }
        }


    }
}
