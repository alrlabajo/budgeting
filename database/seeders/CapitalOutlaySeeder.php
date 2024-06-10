<?php

namespace Database\Seeders;

use App\Models\CapitalOutlay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CapitalOutlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public $college_office = "CEng";

     public $items = [
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

    public function run(): void
{
    // $faker = CapitalOutlay::create();

    $college_office = $this->college_office;

    foreach ($this->items as $item) {
        CapitalOutlay::create([
            'college_office' => $college_office,
            'account_code'=>  $item['account_code'],
            'item'=>  $item['item'],
            'budget'=>  $item['budget'],
            'justification'=>  $item['justification'],
            //change subYear number to 1 if current year, 2 if previous year
            'created_at' => Carbon::now()->subYear(2)->subDays(),
            'updated_at' => Carbon::now()->subYear(2)->subDays(),
        ]);
    }
}
}
