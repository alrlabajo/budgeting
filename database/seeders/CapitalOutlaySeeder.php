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

     public $college_office = "CISTM";

     public $items = [
        ['account_code' => '1-07-04-020', 'item' => 'School Buildings', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-020', 'item' => 'Office Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-030', 'item' => 'Information and Communication Technology Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-070', 'item' => 'Communication Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-090', 'item' => 'Disaster Response and Rescue Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-110', 'item' => 'Medical Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-130', 'item' => 'Sports Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-140', 'item' => 'Technical and Scientific Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-05-990', 'item' => 'Other Machinery and Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-06-010', 'item' => 'Transportation Equipment', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-07-010', 'item' => 'Furniture and Fixtures', 'budget' => '1240000', 'justification' => 'testing'],
        ['account_code' => '1-07-07-020', 'item' => 'Books', 'budget' => '1240000', 'justification' => 'testing']
    ];

    public function run(): void
{
    // $faker = CapitalOutlay::create();

    $college_office = $this->college_office;

    $numberOfRecords = 12;

    foreach ($this->items as $item) {
        CapitalOutlay::create([
            'college_office' => $college_office,
            'account_code'=>  $item['account_code'],
            'item'=>  $item['item'],
            'budget'=>  $item['budget'],
            'justification'=>  $item['justification'],
            'created_at' => Carbon::now()->subYear()->subDays(rand(0, 365)),
            'updated_at' => Carbon::now()->subYear()->subDays(rand(0, 365)),
        ]);
    }
}
}
